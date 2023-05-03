<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileIdentifierController extends Controller
{
    public function index(Request $request, $username = null, $lname = null)
    {
        return view('profile', [
            'username' => $username,
            'lname' => $lname,
        ]);
    }
}
