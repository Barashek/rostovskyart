@extends("template") 

@section("title") 
    Выставки | Династия художников Ростовских 
@endsection 

@section("content")

<div class="row">
    <div class="col-lg-8">
        @foreach($expositions as $exp)
            <p class="exposition">{{ $exp->year }} — {{ $exp->place }}</p>
        @endforeach
    </div>
    <div class="col-lg-4 exposition-img">
        <img src="img/Изображение 2.jpg">
        <img src="img/Изображение 1.jpg">
        <img src="img/Изображение 3.jpg">        
    </div>        
</div>

@endsection