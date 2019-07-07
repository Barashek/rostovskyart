@extends("template") 

@section("title") 
    Выставки | Династия художников Ростовских 
@endsection 

@section("content")

<div class="row">
    <div class="col-lg-9">
        <!-- <div class="row">
            <div class="col-lg-2">1987</div>
            <div class="col-lg-10">— Персональная выставка В. Ростовского. Крым. Симферополь. Дом художника.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1989</div>
            <div class="col-lg-10">— Персональная выставка В. Ростовского. Москва. ЦДХ.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1990-1993</div>
            <div class="col-lg-10">— Персональные выставки в США и Канаде.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1991</div>
            <div class="col-lg-10">— Германия. Марбург.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1993</div>
            <div class="col-lg-10">— Греция. Афины. «Grigorakis gallery».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1994</div>
            <div class="col-lg-10">— Россия. Москва. ЦДХ.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1996</div>
            <div class="col-lg-10">— Греция. Афины. «Kardashidi gallery».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1997</div>
            <div class="col-lg-10">— Германия. Берлин. «Центр науки и культуры».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">1998</div>
            <div class="col-lg-10">— Россия. Звездный городок. «Центр подготовки космонавтов».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2000</div>
            <div class="col-lg-10">— Россия. Москва. «Бизнес-центр ТПП РФ».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2003, 2006</div>
            <div class="col-lg-10">— Украина. Крым. «Ливадийский Дворец-музей».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2007</div>
            <div class="col-lg-10">— Россия. Москва. «Государственное собрание. Гос. Дума РФ ».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2007</div>
            <div class="col-lg-10">— ОАЭ. "Emirates Palace Abu Dhabi".</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2008</div>
            <div class="col-lg-10">— ОАЭ. «ABU DHABI CULTURE & HERITAGE».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2009</div>
            <div class="col-lg-10">— Россия. Москва. «Арт-салон 2009».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2009</div>
            <div class="col-lg-10">— Россия. Москва. «Арт-Манеж 2009».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2010</div>
            <div class="col-lg-10">— Россия. Санкт-Петербург. Галерея «N-проспект».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2011</div>
            <div class="col-lg-10">— ОАЭ. Дубай. «ProArt gallery».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2011</div>
            <div class="col-lg-10">— Россия. Москва. ЦДХ. «Галерея ТНК Арт».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2012</div>
            <div class="col-lg-10">— Польша. Краков. «Krakow Art Expo 2012».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2012</div>
            <div class="col-lg-10">— Россия. Москва. «Арт-салон 2012».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2013</div>
            <div class="col-lg-10">— Украина. Крым. Ялта. Галерея «Почерк».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2014</div>
            <div class="col-lg-10">— Россия. Москва. «Арт-салон 2014».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2015</div>
            <div class="col-lg-10">— КНР. Пекин. «Арт Пекин 2015». Галерея «Жанр».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2016</div>
            <div class="col-lg-10">— Росссия. Ялта. "Дом композитора". Выставка крымских художников.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2016</div>
            <div class="col-lg-10">— Россия. Москва. Арт-центр компании «Транс Нафта».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2016</div>
            <div class="col-lg-10">— Россия. Крым. Ялта. Арт-фестиваль «Музыка красок».</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2016</div>
            <div class="col-lg-10">— Росссия. Севастополь. Театр им. Луначарского. Выставка "Музыка красок" участников Арт-фестиваля.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2016</div>
            <div class="col-lg-10">— Росссия. Ялта. "Дом композитора". Выставка "Музыка красок" участников Арт-фестиваля.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2017</div>
            <div class="col-lg-10">— КНР. Гуанчжоу. Персональная выставкаа художников династии Ростовских.</div>
        </div>
        <div class="row">
            <div class="col-lg-2">2018</div>
            <div class="col-lg-10">— Росссия. Ялта. "Дом композитора". Персональная выставка художников династии Ростовских.</div>
        </div> -->

        @foreach($expositions as $exp)
            <p class="exposition">{{ $exp->year }} — {{ $exp->place }}</p>
        @endforeach
    </div>
</div>
@endsection