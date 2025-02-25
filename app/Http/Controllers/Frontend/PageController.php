<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function index()
    {
        // Attempt to get the data from cache for 60 minutes
        $cars = Cache::remember('cars', 60, function () {
            // If the data is not in the cache, query the database
            return Car::all();
        });
        if (Auth::check()) {
            // Check if the user is an admin
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect admin users to the dashboard
            }
            // Attempt to get the data from cache for 60 minutes
            $cars = Cache::remember('cars', 60, function () {
                // If the data is not in the cache, query the database
                return Car::all();
            });

            return view('frontend.home', compact('cars'));
        }
        // Default homepage for guests
        return view('frontend.home', compact('cars'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function register()
    {
        return view('register');
    }

    public function storeCustomer(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Create the new user
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->save();

        // Redirect to a desired page, e.g., a login page or home
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function login()
    {
        return view('login');
    }


    public function passwordRequest()
    {
        return view('reset_password');
    }
    public function sendPasswordReset(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email'
        ]);

        // Check if the user exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response("
            <script>
                alert('The provided email does not match with our system.');
                window.history.back();
            </script>
        ");
        }

        // Generate a random 4-digit OTP
        $otp = rand(1000, 9999);

        // Store OTP in cache for 2 minutes
        Cache::put('otp_' . $user->email, $otp, now()->addMinutes(2));

        // Send OTP to user's email
        Mail::send('mail_form', ['otp' => $otp, 'user' => $user->name], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Password Reset OTP');
        });

        // Return OTP verification form
        return view('verify_otp', ['email' => $user->email]);
    }

    public function verifyOtp(Request $request)
    {
        // Validate OTP input
        $request->validate([
            'otp' => 'required|numeric|digits:4' // Ensure OTP is a 4-digit numeric value
        ]);

        // Retrieve email from the request
        $email = $request->input('email');

        // Retrieve OTP from cache
        $otpFromCache = Cache::get('otp_' . $email);

        // Check if OTP exists (if null, it means OTP has expired)
        if ($otpFromCache === null) {
            return response("
        <script>
            alert('OTP has expired. Please request a new one.');
            window.location.href = '" . route('password.request') . "';
        </script>
    ");
        }

        // Retrieve user by email
        $user = User::where('email', $email)->first();

        // Check if user exists
        if (!$user) {
            return response("
        <script>
            alert('User not found.');
            window.location.href = '" . route('login') . "';
        </script>
    ");
        }

        // Compare the OTP entered by the user with the OTP stored in the cache
        if ($request->otp == $otpFromCache) {

            // OTP matches, delete the OTP from cache for security
            Cache::forget('otp_' . $email);
            // Proceed to the password reset form
            return view('password_reset_form', [
                'user_id' => $user->id, // Pass the user ID to the view
                'email' => $user->email // Pass the email to the view
            ]);
        } else {
            return response("
        <script>
            alert('The OTP is incorrect.');
            window.history.back();
        </script>
    ");
        }
    }



    public function updatePassword(Request $request)
    {
        // Check if the password is less than 8 characters before validation
        if (strlen($request->new_password) < 8) {
            return response("
            <script>
                alert('Please provide at least 8 characters for the password.');
                window.history.back();
            </script>
        ");
        }

        // Validate input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Find the user and update password
        $user = User::findOrFail($request->user_id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect with success message
        return redirect()->route('login')->with('success', 'Password updated successfully.');
    }

    public function customerLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Find user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and password matches
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response("
            <script>
                alert('Invalid email or password.');
                window.history.back();
            </script>
        ");
        }

        // Store user ID in the session before logging in
        session(['user_id' => $user->id]);
        // Log in the user
        Auth::login($user);

        // Check if the user is an admin
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        }

        $cars = Car::all();
        // Redirect to frontend home view
        return view('frontend.home', compact('cars'));
    }

    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Destroy the session
        session()->flush();

        // Redirect to login page
        return redirect()->route('login');
    }
}
