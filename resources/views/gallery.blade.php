@extends("template")
@section("title")
Галерея | Династия художников Ростовских
@endsection

@section("content")

<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/gallery.css">
<script type="text/javascript" src="js/lightbox.js"></script>

<p>
    <div>КАРТИНЫ ХУДОЖНИКА </div>
    <div class="dropdown dropright">
        <button id="art-list-btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">{{ $artist->name }}</button>
        <div class="dropdown-menu" role="menu" id="art-list">
            @foreach ($artists as $art)
            <a class="dropdown-item" role="presentation" id="{{ $art->id }}" onclick="galleryAjax(this)">{{ $art->name }}</a> @endforeach
        </div>
    </div>
</p>
<div class="row">
    <div class="col-lg-1 d-flex align-items-center">
        <img id="page-up" src="img/left-btn.png" onclick="Pagination(this)">
    </div>
    <div class="col-lg-10">
        <div id="gallery">

        </div>
    </div>
    <div class="col-lg-1 d-flex align-items-center">
        <img id="page-down" src="img/right-btn.png" onclick="Pagination(this)">
    </div>
</div>
<script src="js/galleryAjax.js"></script>
@endsection