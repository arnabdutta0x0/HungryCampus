<?php

namespace App\Http\Controllers;

use App\Models\CodeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('payment_failure');
    }

    public function session(Request $request)
    {
        // Retrieve the values from the request
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $productIdsString = $request->get('productIdsString');

        // Store the values in session variables
        session()->put('productname', $productname);
        session()->put('totalprice', $totalprice);
        session()->put('productIdsString', $productIdsString);

        // The rest of your existing code...
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $two0 = "00";
        $total = "$totalprice$two0";

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'INR',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        $productIdsString = session()->get('productIdsString'); // Retrieve the productIdsString from the session

        $user = Auth::user();
        $email = $user->email;

        $existingCode = CodeValidation::where('email', $email)->latest()->first();

        if ($existingCode && Carbon::parse($existingCode->expires_at)->isFuture()) {
            // Use the existing code if it exists and is still valid
            $code = $existingCode->code;

        } else {
            // Generate a new code
            $code = $this->generateRandomCode();
            $this->storeCode($email, $code, $productIdsString);
        }

        return view('confirmation');

    }

    private function storeCode($email, $code, $productIdsString)
    {
        $expiresAt = Carbon::now()->addHours(1);

        CodeValidation::create([
            'email' => $email,
            'code' => $code,
            'product_id' => $productIdsString, // Store the product IDs as a comma-separated string
            'expires_at' => $expiresAt,
        ]);

        // Send the email with the code
        $this->sendCodeConfirmation($email, $code);
    }

    private function sendCodeConfirmation($email, $code)
    {
        $data = [
            'code' => $code,
        ];

        Mail::send('emails.payment_confirmation', $data, function ($message) use ($email) {
            $message->to($email)->subject('Payment Confirmation');
        });
    }

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

    public function verifyCode(Request $request)
    {
        // Get the code entered in the form
        $code = $request->input('ip1') . $request->input('ip2') . $request->input('ip3') . $request->input('ip4');

        // Query the code_validations table to check if the code exists
        $codeValidation = CodeValidation::where('code', $code)->first();


        if ($codeValidation) {

            $orderDetails = CodeValidation::where('code', $code)->first();

            $productid = $orderDetails->product_id;

            // Code is valid, redirect to the orderConfirm route with the code as a parameter
            return view('orderConfirm', ['code' => $code , 'productid' => $productid]);

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
        $productid = $request->input('productid');

        if ($action === 'yes' && $code) {
            CodeValidation::where('code', $code)->delete();
            return redirect()->route('admin');
        } else {
            return redirect()->route('admin');
        }

    }

}