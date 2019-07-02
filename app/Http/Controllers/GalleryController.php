<?php

namespace App\Http\Controllers;

use App\Painting;
use App\Artist;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        $paintings = Painting::all();
        return view('gallery', [
            'paintings' => $paintings,
            'artists' => $artists
        ]);
    }
}
