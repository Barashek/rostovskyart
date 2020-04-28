<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exposition;

class ExpositionsController extends Controller
{
    public function index()
    {
        $expositions = Exposition::all();
        return view('expositions', ['expositions' => $expositions]);
    }
}
