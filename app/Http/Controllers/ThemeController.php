<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function themeOne()
    {
        return view('theme1.index');
    }

    public function themeTwo()
    {
        return view('theme2.index');
    }

    public function themeThree()
    {
        return view('theme3.index');
    }
}
