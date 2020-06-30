<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view("register");
    }

    public function welcome(Request $request)
    {
        $first_name = $request->input("fName");
        $last_name = $request->input("lName");
        return view("welcome", [
            "first_name" => $first_name,
            "last_name" => $last_name
        ]);
    }
}
