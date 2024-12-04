<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        // Check user exists or not
        $currentUser = User::query()
            ->where("email", $request->email)
            ->first();
        if (!$currentUser || !Hash::check($request->password, $currentUser->password)) {
            // Authentication is failed
            return redirect()
                ->back()
                ->with([
                    "message" => "Your username or password is not correct"
                ]);
        }

        return redirect()
            ->route("dashboard")
            ->with([
                "message" => "Welcome to your dashboard"
            ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()
            ->back()
            ->with([
                "message" => "You are logout successfully"
            ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeMember(RegisterRequest $request)
    {
        // Check user exists or not
        $currentUser = \App\Models\User::query()
            ->where("email", $request->email)
            ->first();
        if ($currentUser) {
            return redirect()
                ->back()
                ->with([
                    "message" => "Please opt another username"
                ]);
        }

        User::query()
            ->create($request->only([
                "name",
                "family",
                "phone_number",
                "email",
                "password",
            ]));

        return redirect()
            ->route("dashboard")
            ->with([
                "message" => "Welcome to your dashboard"
            ]);
    }
}
