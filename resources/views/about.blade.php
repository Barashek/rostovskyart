@extends("template") 
@section("title") О художниках | Династия художников Ростовских @endsection 


@section("content")

<script type="text/javascript" src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/about.css">

<div class="row">
    <div class="col-lg-9 col-md-8" id="text">
        <p> Искусство как род священодействия, как вечный поиск красоты и истины - так можно описать значение живописи в жизни признанных художников Валерия Ростовского-старшего, Константина Ростовского, Валерия Ростовского-младшего.
        </p>
        <p>
            Живопись, пронизанная светом и наполненная воздухом, несет радость жизни и надежды. Поэзия одухотворенного мира природы раскрывается во всей гамме чувств и настроений, завораживает зрителя переливами тонких красочных переходов, воздушной легкостью и прозрачностью
            живописной материи.
        </p>
        <p>
            Светозарное, исполненное достоинства величие природы художники передают вдумчиво и созерцательно. Полотна полны мягкого света, обволакивающего формы, растворяющего очертания предметов и превращающего мир материальный в мерцающее свечение красок. Замирая
            в воосхищении, мы становимся свидетелями таинства - преображения жизни в искусство.
        </p>
        <p>
            Через изображение природы мастера стремятся прикоснуться к чувственному восприятию человека, вызвать самые глубокие внутренние эмоции. Живописные полотна затрагивают тончайшие струны души, погружают зрителя в состояние необыкновенного восторга, возникающего
            при созерцании красоты.
        </p>
        <p>
            Поэтичность, чуткость и тонкость восприятия, мягкая красочность цветовой палитры, широкая манера письма помогают художникам создать живописный мир материи, посвящающий зрителя в тайны мироздания. Этот художественный мир перемежается с миром материальным,
            рождая подлинную живописную поэзию - поэзию о красоте, вечности и любви.
        </p>
    </div>
    <div class="col-lg-3 col-md-4 d-flex align-items-center">
        <div style="width:100%; height:100%; padding-left:10px" class="float-img">
            <a href="img/IMG-20181111-WA0020.jpg" data-lightbox="grp" class="mod">
                <img src="img/IMG-20181111-WA0020.jpg" style="top:0; right:0">
            </a>
            <a href="img/IMG-20181111-WA0017.jpg" data-lightbox="grp" class="mod">
                <img src="img/IMG-20181111-WA0017.jpg" style="top:50%; left:0">
            </a>
        </div>
    </div>

</div>

{{-- <div class="row d-flex align-items-center" id="about-img-row">
    <div class="col-lg-4 col-md-4">
        <img src="img/IMG-20181111-WA0033.jpg">
    </div>
    <div class="col-lg-4 col-md-4">
        <img src="img/IMG-20181111-WA0031.jpg">
    </div>
    <div class="col-lg-4 col-md-4">
        <img src="img/IMG-20181111-WA0036.jpg">
    </div>
</div> --}}

<div class="row d-flex align-items-center" id="about-img-row">
    @foreach($imgs as $img)
    <div class="col-4" style="padding:10px">
        <a href="{{$img}}" data-lightbox="grp" class="mod">
            <img src="{{$img}}" style="width:100%;object-fit:contain">
        </a>
    </div>
    @endforeach
</div>


{{-- <script src="js/float.js"></script> --}}
@endsection