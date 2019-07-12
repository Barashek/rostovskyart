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
        if (isset($_GET['onPage']))
            $nPainingsOnPage = $_GET['onPage'];
        if (isset($_GET['page']))
            $page = $_GET['page'];

        if (!isset($_POST['nPaintings'])) {
            $nPaintings = Painting::where('artist_id', '=', $_GET['id'])->count();
            $_POST['nPaintings'] = $nPaintings;
        } else {
            $nPaintings = $_POST['nPaintings'];
        }

        $nPages = ceil($nPaintings / $nPainingsOnPage);

        if ($page == 1) {
            $isBegin = true;
        } else {
            $isBegin = false;
        }
        if ($page == $nPages || $nPages == 0) {
            $isEnd = true;
        } else {
            $isEnd = false;
        }


        $begin = ($page - 1) * $nPainingsOnPage;

        $paintings = Painting::where('artist_id', '=', $_GET['id'])->skip($begin)->take($nPainingsOnPage)->get();

        return response()->json(array(
            'paintings' => $paintings,
            'isBegin' => $isBegin,
            'isEnd' => $isEnd
        ), 200);
    }
}
