<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MirController extends Controller
{
    public function index()
    {
        $imgs = array();
        $path = 'img/Mir/';

        foreach (glob("img/Mir/*.jpg") as $filename) {
            $imgs[] = $filename;
        }
        // if ($handle = opendir($path)) {
        //     while (false !== ($file = readdir($handle))) {
        //         $imgs[] = $file;
        //     }
        //     closedir($handle);
        // }
        return view('mir', [
            'imgs' => $imgs,
            'path' => $path
        ]);
    }
}
