<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForgotPass;
use App\Models\User;
use App\Models\CodeValidation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;



class ForgotPassword extends Controller
{

    // for Checking Email is valid or not AND other Function calls
    public function sendForgotPasswordEmail(Request $request)
    {
        $email = $request->input('email');
    
        // Check if the email exists in the 'users' table
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            // Redirect back with an error message or take appropriate action
            return redirect()->back()->withErrors(['email' => 'Email not found']);
        }
    
        // Check if there is an existing code for the email in the database
        $existingCodeInDatabase = ForgotPass::where('email', $email)->first();
    
        if ($existingCodeInDatabase) {
            // If a code already exists in the database, delete it
            $existingCodeInDatabase->delete();
        }
    
        // Generate a new random code
        $code = $this->generateRandomCode();
    
        // Store the code and send the email
        $this->storeCode($email, $code);
    
        // Store the code in the session to prevent regeneration on page refresh
        $request->session()->put('forgot_password_code', $code);
    
        return view('verify', ['email' => $email]);
    }
    

    // generate random code
    private function generateRandomCode()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $code = '';

        for ($i = 0; $i < 4; $i++) {
            $randomChar = $characters[rand(0, strlen($characters) - 1)];
            $code .= $randomChar;
        }

        return $code;
    }

    
    // Storing code to database
    private function storeCode($email, $code)
    {
        $expiresAt = Carbon::now()->addHours(1);

        ForgotPass::create([
            'email' => $email,
            'code' => $code,
            'expires_at' => $expiresAt
        ]);

        // Send the email with the code
        $this->sendCode($email, $code);
    }

    
    // Sending code to user
    private function sendCode($email, $code)
    {
        $data = [
            'code' => $code,
        ];

        Mail::send('emails.forgot_password', $data, function ($message) use ($email) {
            $message->to($email)->subject('Forgot Password');
        });
        
    }

    
    public function verifyCode(Request $request)
    {
        // Get the code and email entered in the form
        $code = $request->input('code');
        $email = $request->input('email');
    
        // Query the code_validations table to check if the code and email combination exists
        $forgotPass = ForgotPass::where('code', $code)->where('email', $email)->first();
    
        if ($forgotPass) {
            // Code and email combination is valid, delete the code
            $forgotPass->delete();
            // Render the 'cp' view with the email parameter
            return view('cp', ['email' => $email]);
        }
        else{
            $msg = "Invalid code or email combination";
        }
    
        // Code or email is invalid, handle the error
        // You can redirect back with an error message or take any other appropriate action
        return redirect()->back()->withErrors(['code' => 'Invalid code or email combination']);
    }
    
    
    public function confirmPass(Request $request)
    {
        $password = $request->input('password');
        $email = $request->input('email');
    
        // Retrieve the user based on the email
        $user = User::where('email', $email)->first();
    
        if ($user) {
            // User found, update the password
            $hashedPassword = Hash::make($password);
            $user->password = $hashedPassword;
    
            if ($user->save()) {
                $msg = "You are all set with Password";
            } else {
                $msg = "Error: Failed to update Password";
            }
        } else {
            // User not found, handle the error
            $msg = "Error: User not found";
        }
    
        // Pass the message to the signpage view
        return view('signpage', ['msg' => $msg]);
    }

}