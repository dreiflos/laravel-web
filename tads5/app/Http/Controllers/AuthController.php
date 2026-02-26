<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
    $request->validate([
        'email' => 'required|string|email|max:200',
        'password' => 'required|string',
        'device_name' => 'required|string'
    ]);

    }
}
