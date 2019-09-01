<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //landing page
    public function index()
    {
        return view('welcome');
    }

    // academics page
    public function academics()
    {
        return view('academics');
    }


    //departemnts page
    public function departments()
    {
        return view('departments');
    }
}
