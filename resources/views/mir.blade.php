@extends("template") 

@section("title") 
    Выставка на станции МИР | Династия художников Ростовских 
@endsection 

@section("content")

<script type="text/javascript" src="js/lightbox.js"></script>

<div class="row">
    <div class="col">
        <p>Впервые в истории человечества в космосе, на борту орбитального комплекса "Мир", была проведена выставка произведений известного художника, 
        магистра акварели, магистра живописи Валерия Ростовского. </p>
        <p>Экспозиция состояла из 12 авторских произведений , выполненных в технике акварели на бумаге CANSON. 
        Акварели специально отбирались для этой выставки космонавтами Сергеем Залетиным и Александром Калери. </p>
        <p>По окончании полета все произведения этой уникальной выставки были доставлены на Землю.</p>
    </div>
</div>
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