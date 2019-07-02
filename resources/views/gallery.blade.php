@extends("template")

@section("title")
Галерея | Династия художников Ростовских
@endsection

@section("content")

<link rel="stylesheet" href="css/gallery.css">

<p>Картины художника 
    <select name="artist">
        @foreach($artists as $artist)
            <option value="{{ $artist->id }}">{{ $artist->name }}</option>
        @endforeach
    </select>

    @for($i = 0; $i < @count($paintings); $i=$i + 4) 
        <div class="row d-flex align-items-center">
        @for($j = $i; $j < ($i + 4); $j++)
        <div class="col-lg-3">
            @if(@isset($paintings[$j]))
                <a href="img{{ $paintings[$j]->path }}"><img class="paint" src="img/{{ $paintings[$j]->path }}"></a>
            @endif
        </div>       
        @endfor
        </div>
    @endfor

@endsection