<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExpositionsController extends Controller
{
    public function index()
    {
        return view('expositions');
    }
}
