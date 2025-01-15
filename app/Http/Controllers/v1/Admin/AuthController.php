<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Response\Response;
use function auth;
use function redirect;
use function view;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.sign-in');
    }

    public function authenticate(LoginRequest $request)
    {
        // Check user exists or not
        $currentUser = User::query()
            ->where("email", $request->username)
            ->orWhere("phone_number", $request->username)
            ->first();
        if (!$currentUser || !Hash::check($request->password, $currentUser->password)) {
            // Authentication is failed
            return Response::redirect(route("login"))
                ->code(403)
                ->failed("Your username or password is not correct");
        }

        Auth::guard("web")
            ->login($currentUser, $request->get("remember", false));
        return Response::redirect(route("admin.dashboard"))
            ->jsonData(["user" => $currentUser->toArray()])
            ->code(200)
            ->success("Welcome to your dashboard");
    }

    public function logout()
    {
        auth()->logout();

        return redirect()
            ->route("login")
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
            ->route("admin.dashboard")
            ->with([
                "message" => "Welcome to your dashboard"
            ]);
    }
}
