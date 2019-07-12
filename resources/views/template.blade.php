@extends('navbar')
@section('container')

    <div class="row d-flex justify-content-around">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" id="content">
            @yield("content")
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row" id="footer"></div>

@endsection