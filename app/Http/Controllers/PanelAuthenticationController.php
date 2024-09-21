<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PanelAuthenticationController extends Controller
{
    protected mixed $userService;

    public function __construct()
    {
        $this->userService = App::make(UserServiceInterface::class);
    }

    public function index()
    {
        return view("auth.panel.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            if ($user->hasRole('super-admin')) {
                $request->session()->regenerate();
                return redirect()->route('panel.dashboard')->with('success', true);
            } else {
                // Handle the case where the user is not an admin
                Auth::logout();
                return abort(503);
            }
        }
        return redirect()->route("panel.login")->with("error",true);
    }
}
