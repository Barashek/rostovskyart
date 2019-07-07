<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertToExposinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expositions', function (Blueprint $table) {
            //
        });

        DB::table('expositions')->insert(array(
            'year' => '1978',
            'place' => 'Персональная выставка В. Ростовского. Крым. Симферополь. Дом художника.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1989',
            'place' => 'Персональная выставка В. Ростовского. Москва. ЦДХ.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1990-1993',
            'place' => 'Персональные выставки в США и Канаде.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1991',
            'place' => 'Германия. Марбург.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1993',
            'place' => 'Греция. Афины. «Grigorakis gallery».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1994',
            'place' => 'Россия. Москва. ЦДХ.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1996',
            'place' => 'Греция. Афины. «Kardashidi gallery»'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1997',
            'place' => 'Германия. Берлин. «Центр науки и культуры».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '1998',
            'place' => 'Россия. Звездный городок. «Центр подготовки космонавтов».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2000',
            'place' => 'Россия. Москва. «Бизнес-центр ТПП РФ».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2003',
            'place' => 'Украина. Крым. «Ливадийский Дворец-музей».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2007',
            'place' => 'Россия. Москва. «Государственное собрание. Гос. Дума РФ».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2007',
            'place' => 'ОАЭ. "Emirates Palace Abu Dhabi".'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2008',
            'place' => 'ОАЭ. «ABU DHABI CULTURE & HERITAGE».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2009',
            'place' => 'Россия. Москва. «Арт-салон 2009».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2009',
            'place' => 'Россия. Москва. «Арт-Манеж 2009».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2010',
            'place' => 'Россия. Санкт-Петербург. Галерея «N-проспект».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2011',
            'place' => 'ОАЭ. Дубай. «ProArt gallery».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2011',
            'place' => 'Россия. Москва. ЦДХ. «Галерея ТНК Арт».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2012',
            'place' => 'Польша. Краков. «Krakow Art Expo 2012».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2012',
            'place' => 'Россия. Москва. «Арт-салон 2012».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2013',
            'place' => 'Украина. Крым. Ялта. Галерея «Почерк».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2014',
            'place' => 'Россия. Москва. «Арт-салон 2014».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2015',
            'place' => 'КНР. Пекин. «Арт Пекин 2015». Галерея «Жанр».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2016',
            'place' => 'Росссия. Ялта. "Дом композитора". Выставка крымских художников.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2016',
            'place' => 'Россия. Москва. Арт-центр компании «Транс Нафта».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2016',
            'place' => 'Россия. Крым. Ялта. Арт-фестиваль «Музыка красок».'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2016',
            'place' => 'Росссия. Севастополь. Театр им. Луначарского. Выставка "Музыка красок" участников Арт-фестиваля.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2016',
            'place' => 'Росссия. Ялта. "Дом композитора". Выставка "Музыка красок" участников Арт-фестиваля.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2017',
            'place' => 'КНР. Гуанчжоу. Персональная выставкаа художников династии Ростовских.'
        ));
        DB::table('expositions')->insert(array(
            'year' => '2018',
            'place' => 'Росссия. Ялта. "Дом композитора". Персональная выставка художников династии Ростовских.'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expositions', function (Blueprint $table) {
            //
        });
    }
}
