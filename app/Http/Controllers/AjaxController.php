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
        if (!isset($_GET['onPage']) || !isset($_GET['page']))
            return response()->json(array(), 500);

        $nPaintingsOnPage = $_GET['onPage'];
        $page = $_GET['page'];

        if (!isset($_POST['nPaintings'])) {
            $nPaintings = Painting::where('artist_id', '=', $_GET['id'])->count();
            $_POST['nPaintings'] = $nPaintings;
        } else {
            $nPaintings = $_POST['nPaintings'];
        }

        $nPages = ceil($nPaintings / $nPaintingsOnPage);

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


        $begin = ($page - 1) * $nPaintingsOnPage;

        $paintings = Painting::where('artist_id', '=', $_GET['id'])->orderBy('id', 'desc')
            ->skip($begin)->take($nPaintingsOnPage)->get();

        return response()->json(array(
            'paintings' => $paintings,
            'isBegin' => $isBegin,
            'isEnd' => $isEnd
        ), 200);
    }
}
