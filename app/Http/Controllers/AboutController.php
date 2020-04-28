<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $imgs = array();

        foreach (glob("img/about/*.jpg") as $filename) {
            $imgs[] = $filename;
        }
        return view('about', [
            'imgs' => $imgs
        ]);
    }
}
