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
        $artist = Artist::where('id', '=', 1)->first();
        $paintings = Painting::where('artist_id', '=', '1')->get();
        return view('gallery', [
            'paintings' => $paintings,
            'artists' => $artists,
            'artist' => $artist
        ]);
    }
}
