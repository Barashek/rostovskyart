@extends("template")

@section("title")
Галерея | Династия художников Ростовских
@endsection

@section("content")

<link rel="stylesheet" href="css/gallery.css">

<p><div>Картины художника </div>
    <div class="dropdown dropright" >
        <button id="art-list" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">{{ $artist->name }}</button>
        <div class="dropdown-menu" role="menu">
            @foreach ($artists as $art) 
                <a class="dropdown-item" role="presentation" id="{{ $art->id }}" onclick="galleryAjax(this.id)">{{ $art->name }}</a>
            @endforeach
        </div>
    </div>
</p>
<div id="gallery">
</div>
    <script src="js/galleryAjax.js"></script>  
@endsection