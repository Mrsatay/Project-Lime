<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function SignIn()
    {
        return view('SignIn');
    }

    public function SignUp()
    {
        return view('SignUp');
    }
}
