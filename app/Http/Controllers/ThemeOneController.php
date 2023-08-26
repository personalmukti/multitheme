<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeOneController extends Controller
{
    public function index()
    {
        return view('theme1.index');
    }
}
