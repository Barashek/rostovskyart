@extends('template')
@section('title') Выставка на МКС | Династия художников Ростовских @endsection

@section('content')

<script type="text/javascript" src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

<div class="row d-flex align-items-center">
    @foreach($imgs as $img)
    <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px">
        <a href="{{$img}}" data-lightbox="grp" class="mod">
            <img src="{{$img}}" style="width:100%;object-fit:contain">
        </a>
    </div>
    @endforeach
</div>

@endsection