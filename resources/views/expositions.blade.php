@extends("template") 

@section("title") 
    Выставки | Династия художников Ростовских 
@endsection 

@section("content")

<script type="text/javascript" src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

<div class="row">
    <div class="col-lg-8 col-md-7" id="text">
        @foreach($expositions as $exp)
            @if($exp->href!=null)
                <p class="exposition">{{ $exp->year }} — <a href={{$exp->href}}>{{ $exp->place }}</a></p>
            @else
                <p class="exposition">{{ $exp->year }} — {{ $exp->place }}</p>
            @endif
        @endforeach
    </div>
    <div class="col-lg-4 col-md-5 d-flex align-items-center">
        <div style="width:100%; height:100%; padding-left:10px" class="float-img">
            <a href="img/Изображение 2.jpg" data-lightbox="grp" class="mod">
                <img src="img/Изображение 2.jpg" style="top:0; right:0">
            </a>
            <a href="img/Изображение 1.jpg" data-lightbox="grp" class="mod">
                <img src="img/Изображение 1.jpg" style="top:33%; left:0">
            </a>
            <a href="img/Изображение 3.jpg" data-lightbox="grp" class="mod">
                <img src="img/Изображение 3.jpg" style="top:67%;right:0">      
            </a>
        </div>  
    </div>        
</div>

{{-- <script src="js/float.js"></script> --}}

@endsection