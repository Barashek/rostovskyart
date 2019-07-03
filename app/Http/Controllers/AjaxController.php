<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Painting;

class AjaxController extends Controller
{

    public function index()
    {
        $paintings = Painting::where('artist_id', '=', $_GET['id'])->get();

        return response()->json(array('paintings' => $paintings), 200);
    }
}
