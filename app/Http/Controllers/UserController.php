<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\CodeValidation;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // Retrieve the form data
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $role = 'user';

        $userExists = User::where('username', $username)->exists();

        $emailExists = User::where('email', $email)->exists();

        $msg = "";

        if ($emailExists) {
            $msg = "Email already in use!";
        } else {
            if ($userExists) {
                $msg = "Username already taken!";
            } else {
                $hashedPassword = bcrypt($password);

                $user = new User();
                $user->username = $username;
                $user->email = $email;
                $user->password = $hashedPassword;
                $user->role = $role;
                $user->image = 'id.png';

                if ($user->save()) {
                    $msg = "Thanks for signing up :)";
                } else {
                    $msg = "Error: Failed to insert user.";
                }
            }
        }

        // Pass the message to the signpage view
        return view('signpage', ['msg' => $msg]);
    }

    public function signin(Request $request)
    {
        // Retrieve the form data
        $email = $request->input('email2', '');
        $password = $request->input('password2', '');

        $user = User::where('email', $email)->first();

        if ($user) {
            $storedPassword = $user->password;

            if (password_verify($password, $storedPassword)) {
                // Clear any previous error messages
                $error = "";

                // Log in the user and store their session
                auth()->login($user);

                if ($user->role === 'user') {
                    // Redirect to the main page
                    return redirect('/main');
                } elseif ($user->role === 'admin') {
                    // Redirect to the admin profile page
                    return redirect('/admin');
                }

            } else {
                $error = "Please enter the correct password";
            }

        } else {
            $error = "No user found with the given email";
        }

        // Pass the error message to the signpage view
        return view('signpage', ['error' => $error]);
    }

    public function profileUpdate(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username3' => 'required|unique:users,username,' . Auth::id(),
            'email3' => 'required|email|unique:users,email,' . Auth::id(),
            'photo' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        // Retrieve the authenticated user
        $user = $request->user();

        // Retrieve the form data
        $username = $request->input('username3');
        $email = $request->input('email3');
        $photo = $request->file('photo');

        // Prepare the data for update
        $data = [
            'username' => $username,
            'email' => $email,
        ];

        // Handle photo upload and update the image field accordingly
        if ($photo) {
            $extension = $photo->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;

            // Assuming you are storing the images in the public/image directory
            $photo->move(public_path('image'), $filename);
            $data['image'] = $filename;

            // Debugging code
            $filePath = public_path('image') . '/' . $filename;
            if (file_exists($filePath)) {
                // The file was successfully stored
                echo "File stored at: " . $filePath;
            } else {
                // There was an issue with storing the file
                echo "Failed to store the file.";
            }

            // Update the image name in the database
            $user->image = $filename;
        }

        // Check if the new username or email already exists in the database for other users
        if ($username !== $user->username && User::where('username', $username)->exists()) {
            return redirect()->route('profileShow')->withErrors(['username' => 'The username is already taken.']);
        }
        if ($email !== $user->email && User::where('email', $email)->exists()) {
            return redirect()->route('profileShow')->withErrors(['email' => 'The email is already taken.']);
        }

        // Update the user's details
        $user->update($data);

        // Redirect back to the 'profileShow' route
        return redirect()->route('profileShow')->with('success', 'Profile updated successfully');
    }

    public function profileShow(Request $request)
    {
        // Retrieve the authenticated user
        $user = $request->user();

        if ($user) {
            // Retrieve the updated profile image URL
            $profileImageUrl = asset('image/' . $user->image);

            // Pass the user data to the 'main' view
            return view('main', [
                'profileImageUrl' => $profileImageUrl,
                'username' => $user->username,
                'email' => $user->email,
            ]);
        }

        // Handle the case when the user is not authenticated
        // You can redirect to a login page or display an error message
        return response('User not authenticated.', 401);
    }

    public function profileShowAdmin(Request $request)
    {
        // Retrieve the authenticated user
        $user = $request->user();

        if ($user) {

            // Get the username and email
            $username = $user->username;
            return view('admin', ['username' => $username]);

        } else {
            // Handle the case when the user is not authenticated
            // You can redirect to a login page or display an error message
            return response('User not authenticated.', 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');
    }

    public function verifyCode(Request $request)
    {
        // Get the code entered in the form
        $code = $request->input('ip1') . $request->input('ip2') . $request->input('ip3') . $request->input('ip4');

        // Query the code_validations table to check if the code exists
        $codeValidation = CodeValidation::where('code', $code)->first();

        if ($codeValidation) {
            // Code is valid, redirect to the orderConfirm route with the code as a parameter
            return view('orderConfirm', ['code' => $code]);
        } else {
            // Code is invalid, handle the error
            // You can redirect back with an error message or take any other appropriate action
            return redirect()->back()->withErrors(['code' => 'Invalid code']);
        }
    }

    public function orderConfirm(Request $request)
    {
        $action = $request->input('action');
        $code = $request->input('code');

        if ($action === 'yes' && $code) {
            // Perform deletion of order details from code_validations table using the code
            // You need to implement the logic to delete the order details
            CodeValidation::where('code', $code)->delete();

            // Redirect to the admin.blade.php page
            return redirect()->route('admin');
        } else {
            return redirect()->route('admin');
        }
    }

}