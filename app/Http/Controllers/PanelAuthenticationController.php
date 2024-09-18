<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelAuthenticationController extends Controller
{
    public function index()
    {
        return view("auth.panel.login");
    }

    public function login(Request $request)
    {
        //do login admin
        dd($request->all());
    }
}
