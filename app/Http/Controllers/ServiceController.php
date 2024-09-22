<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function single(string $service)
    {
        //check for injection
        return view("front.service.".$service);
    }
}
