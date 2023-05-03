<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navigasi = [
            'Home' => '/',
            'About' => 'about',
            'Contact' => 'contact',
            'Profile' => 'profile',
            'Tasks' => 'tasks',
        ];
        return view('layouts.navbar', compact('navigasi'));
    }
}
