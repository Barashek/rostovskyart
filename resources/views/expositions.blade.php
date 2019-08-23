@extends("template") 

@section("title") 
    Выставки | Династия художников Ростовских 
@endsection 

@section("content")

<div class="row">
    <div class="col-lg-8 col-md-7" id="text">
        @foreach($expositions as $exp)
            <p class="exposition">{{ $exp->year }} — {{ $exp->place }}</p>
        @endforeach
    </div>
    <div class="col-lg-4 col-md-5 d-flex align-items-center">
        <div style="width:100%; height:100%; padding-left:10px" class="float-img">
            <img src="img/Изображение 2.jpg" style="top:0; right:0">
            <img src="img/Изображение 1.jpg" style="top:33%; left:0">
            <img src="img/Изображение 3.jpg" style="top:67%;right:0">      
        </div>  
    </div>        
</div>

{{-- <script src="js/float.js"></script> --}}

@endsection