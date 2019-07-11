@extends('navbar')
@section('container')

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" id="content">
            @yield("content")
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row" id="footer"></div>

@endsection