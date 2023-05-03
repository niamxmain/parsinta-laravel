<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileIdentifierController extends Controller
{
    public function __invoke(Request $request, $username, $lname)
    {
        return view('profile', [
            'username' => $username,
            'lname' => $lname,
        ]);
    }
}
