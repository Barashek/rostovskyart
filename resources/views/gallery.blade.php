@extends("template")

@section("title")
Галерея | Династия художников Ростовских
@endsection

@section("content")

<link rel="stylesheet" href="css/gallery.css">

<p><div>КАРТИНЫ ХУДОЖНИКА </div>
    <div class="dropdown dropright" >
            <button id="art-list-btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">{{ $artist->name }}</button>
                <div class="dropdown-menu" role="menu" id="art-list">
                    @foreach ($artists as $art) 
                        <a class="dropdown-item" role="presentation" id="{{ $art->id }}" onclick="galleryAjax(this)">{{ $art->name }}</a>
                    @endforeach
                </div>
            </div>
</p>
<div class="row">
    <div class="col-lg-1 d-flex align-items-center" id="page-up">
            {{-- <img src="img/left-btn.png"> --}}
    </div>
    <div class="col-lg-10">        
        <div id="gallery">
        
        </div>
    </div>
    <div class="col-lg-1 d-flex align-items-center" id="page-down">
            {{-- <img src="img/right-btn.png"> --}}
    </div>
</div>
    <script src="js/galleryAjax.js"></script>  
@endsection