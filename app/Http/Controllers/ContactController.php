<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() 
    {
        return view('contact');
    }

    public function message(Request $request) 
    {
        return view('contact', [
            'data' => $request->get('data'),
        ]);
    }
}
