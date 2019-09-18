<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ISSController extends Controller
{
    public function index()
    {
        $imgs = array();
        // $path = 'img/Mir/';

        foreach (glob("img/ISS/*.jpg") as $filename) {
            $imgs[] = $filename;
        }
        return view('iss', [
            'imgs' => $imgs
            // 'path' => $path
        ]);
    }
}
