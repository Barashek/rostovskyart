@extends("template") 

@section("title") 
    Выставки | Династия художников Ростовских 
@endsection 

@section("content")

<div class="row">
    <div class="col-lg-9">
        @foreach($expositions as $exp)
            <p class="exposition">{{ $exp->year }} — {{ $exp->place }}</p>
        @endforeach
    </div>
</div>
@endsection