<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoPaintingsTable28042020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paintings', function (Blueprint $table) {
            //
        });
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0010.jpg',
            'name' => 'Букеты весны',
            'size' => '80х100',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0014.jpg',
            'name' => 'Лето',
            'size' => '70х80',
            'year' => '2016',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0015.jpg',
            'name' => 'У пруда',
            'size' => '50х60',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0016.jpg',
            'name' => 'На берегу. Весенние туманы',
            'size' => '40х50',
            'year' => '2007',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0017.jpg',
            'name' => 'Сирень',
            'size' => '70х90',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0018.jpg',
            'name' => 'Южный дворик',
            'size' => '80х60',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0019.jpg',
            'name' => 'Портрет архимандрита Кирилла (Павлова)',
            'size' => '90х100',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0027.jpg',
            'name' => 'Скоро лето',
            'size' => '70х90',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0028.jpg',
            'name' => 'В день святой Троицы',
            'size' => '90х100',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0031.jpg',
            'name' => 'Весенние букеты',
            'size' => '100х80',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0032.jpg',
            'name' => 'Глициния в Симеизе',
            'size' => '60х40',
            'year' => '2015',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0033.jpg',
            'name' => 'Лабиринты времени',
            'size' => '90х120',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0034.jpg',
            'name' => 'Вечерняя набережная',
            'size' => '50х70',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0035.jpg',
            'name' => 'Букет сирени',
            'size' => '70х90',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0036.jpg',
            'name' => 'Весенние букеты. Май',
            'size' => '90х70',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0037.jpg',
            'name' => 'Мак цветет',
            'size' => '55х70',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0038.jpg',
            'name' => 'Штиль',
            'size' => '60х80',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0041.jpg',
            'name' => 'Весна в Ливадии',
            'size' => '60х70',
            'year' => '2015',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0042.jpg',
            'name' => 'Гурзуф',
            'size' => '60х80',
            'year' => '2016',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0043.jpg',
            'name' => 'Сирень',
            'size' => '70х90',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0044.jpg',
            'name' => 'Мак в цвету',
            'size' => '50х80',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0045.jpg',
            'name' => 'Майские букеты',
            'size' => '80х90',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20190824-WA0046.jpg',
            'name' => 'Весна в Крыму',
            'size' => '50х70',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20191111-WA0099.jpg',
            'name' => 'Декабрь в Крыму',
            'size' => '60х90',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0000.jpg',
            'name' => 'Весна. Херсонес',
            'size' => '40х60',
            'year' => '2008',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0001.jpg',
            'name' => 'Горная лаванда',
            'size' => '50х80',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0003.jpg',
            'name' => 'Нарцисы',
            'size' => '60х65',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0004.jpg',
            'name' => 'Сентябрь',
            'size' => '90х100',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0005.jpg',
            'name' => 'Портрет архимандрита Кирилла (Павлова)',
            'size' => '50х40',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0006.jpg',
            'name' => 'Портрет архимандрита Иоанна (Крестьянкина)',
            'size' => '50х40',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0007.jpg',
            'name' => 'Вечер в Симеизе',
            'size' => '50х70',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0009.jpg',
            'name' => 'Фиолент',
            'size' => '50х60',
            'year' => '2014',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0010.jpg',
            'name' => 'Алыча цветет',
            'size' => '50х60',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0011.jpg',
            'name' => 'Коктебель. Весна',
            'size' => '80х120',
            'year' => '2016',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0013.jpg',
            'name' => 'Персик в цвету',
            'size' => '55х60',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0014.jpg',
            'name' => 'Херсонес. Гроза уходит',
            'size' => '80х120',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0016.jpg',
            'name' => 'Весна',
            'size' => '45х35',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0017.jpg',
            'name' => 'Весна. Крым',
            'size' => '45х70',
            'year' => '2016',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0018.jpg',
            'name' => 'Подснежники',
            'size' => '60х50',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0019.jpg',
            'name' => 'Весенние букеты',
            'size' => '100х80',
            'year' => '2020',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0020.jpg',
            'name' => 'Подмосковье',
            'size' => '50х60',
            'year' => '2013',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0021.jpg',
            'name' => 'Вечер. Рыбачье',
            'size' => '30х40',
            'year' => '2008',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0022.jpg',
            'name' => 'Вечерний Херсонес',
            'size' => '80х120',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0023.jpg',
            'name' => 'Осень в Крыму',
            'size' => '35х60',
            'year' => '2014',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0024.jpg',
            'name' => 'Крымский этюд',
            'size' => '30х40',
            'year' => '2015',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0025.jpg',
            'name' => 'Осенние виноградники. Крым',
            'size' => '35х60',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0026.jpg',
            'name' => 'Дом у моря. Крым. Херсонес',
            'size' => '40х50',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0027.jpg',
            'name' => 'Апрельский день. Крым',
            'size' => '40х50',
            'year' => '2014',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0028.jpg',
            'name' => 'В Крымских горах',
            'size' => '40х30',
            'year' => '2000',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0029.jpg',
            'name' => 'Вечер. Бухта Ласпи',
            'size' => '35х50',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0030.jpg',
            'name' => 'Набережная. Ялта',
            'size' => '50х70',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0031.jpg',
            'name' => 'Начало лета. Троица',
            'size' => '35х60',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0032.jpg',
            'name' => 'Весенний этюд',
            'size' => '30х40',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0034.jpg',
            'name' => 'Весенний вечер',
            'size' => '60х80',
            'year' => '2016',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0035.jpg',
            'name' => 'Весенний букет',
            'size' => '60х70',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0036.jpg',
            'name' => 'Айва. Теплая осень',
            'size' => '70х100',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0037.jpg',
            'name' => 'Крым. В парке князей Юсуповых',
            'size' => '60х70',
            'year' => '2017',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0038.jpg',
            'name' => 'Осенее настроение. Крым. Сентябрь',
            'size' => '70х90',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0039.jpg',
            'name' => 'Ирисы',
            'size' => '60х65',
            'year' => '2018',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));
        DB::table('paintings')->insert(array(
            'path' => 'IMG-20200428-WA0040.jpg',
            'name' => 'Ореанда. Крым',
            'size' => '25х35',
            'year' => '2019',
            'description' => 'холст/масло',
            'artist_id' => 2,
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paintings', function (Blueprint $table) {
            //
        });
    }
}
