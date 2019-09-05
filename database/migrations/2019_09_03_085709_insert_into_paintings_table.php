<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoPaintingsTable extends Migration
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
        DB::table('paintings')->insert(array('path' => '1.jpg', 'name' => 'Айва и шторм', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '2.jpg', 'name' => 'Арбуз', 'year' => 2018, 'description' => 'холст/масло', 'size' => '40х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '3.jpg', 'name' => 'Бессмертники', 'year' => 2016, 'description' => 'холст/масло', 'size' => '70х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '4.jpg', 'name' => 'Бухта Чехова', 'year' => 2018, 'description' => 'холст/масло', 'size' => '40х50', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '5.jpg', 'name' => 'В летнем парке', 'year' => 2018, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '6.jpg', 'name' => 'Весенний вид на Ялту', 'year' => 2014, 'description' => 'холст/масло', 'size' => '60х90', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '7.jpg', 'name' => 'Весна', 'year' => 2019, 'description' => 'холст/масло', 'size' => '80х50', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '8.jpg', 'name' => 'Весна. Ялта', 'year' => 2017, 'description' => 'холст/масло', 'size' => '65х45', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '9.jpg', 'name' => 'Вечер', 'year' => 2016, 'description' => 'холст/масло', 'size' => '40х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '10.jpg', 'name' => 'Вечер', 'year' => 2017, 'description' => 'холст/масло', 'size' => '40х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '11.jpg', 'name' => 'Вечер.Набережная', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х40', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '12.jpg', 'name' => 'Вечерний вид на Ялту', 'year' => 2019, 'description' => 'холст/масло', 'size' => '40х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '13.jpg', 'name' => 'Вечерний звон', 'year' => 2019, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '14.jpg', 'name' => 'Вид на Аю-Даг', 'year' => 2019, 'description' => 'холст/масло', 'size' => '45х65', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '15.jpg', 'name' => 'Вид на Аю-Даг', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '16.jpg', 'name' => 'Вид на Ялту утром', 'year' => 2005, 'description' => 'холст/масло', 'size' => '50х100', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '17.jpg', 'name' => 'Горная лаванда', 'year' => 2013, 'description' => 'холст/масло', 'size' => '60х90', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '18.jpg', 'name' => 'Дыня', 'year' => 2018, 'description' => 'холст/масло', 'size' => '40х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '19.jpg', 'name' => 'Кактусы и море', 'year' => 2013, 'description' => 'холст/масло', 'size' => '60х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '20.jpg', 'name' => 'Лаванда', 'year' => 2014, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '21.jpg', 'name' => 'Лаванда', 'year' => 2017, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '22.jpg', 'name' => 'Ливадия', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '23.jpg', 'name' => 'Натюрморт с лимоном', 'year' => 2012, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '24.jpg', 'name' => 'Натюрморт с персиками', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '25.jpg', 'name' => 'Натюрморт с якорем', 'year' => 2014, 'description' => 'холст/масло', 'size' => '90х120', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '26.jpg', 'name' => 'Ночная Ялта', 'year' => 2016, 'description' => 'холст/масло', 'size' => '70х100', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '27.jpg', 'name' => 'Осеннее солнце', 'year' => 2017, 'description' => 'холст/масло', 'size' => '70х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '28.jpg', 'name' => 'Осенний вид на Ялту', 'year' => 2017, 'description' => 'холст/масло', 'size' => '30х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '29.jpg', 'name' => 'Осень', 'year' => 2018, 'description' => 'холст/масло', 'size' => '60х90', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '30.jpg', 'name' => 'Отдых на берегу', 'year' => 2013, 'description' => 'холст/масло', 'size' => '60х90', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '31.jpg', 'name' => 'Пионы', 'year' => 2018, 'description' => 'холст/масло', 'size' => '70х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '32.jpg', 'name' => 'Подснежники', 'year' => 2019, 'description' => 'холст/масло', 'size' => '30х40', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '33.jpg', 'name' => 'Розы', 'year' => 2017, 'description' => 'холст/масло', 'size' => '80х120', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '34.jpg', 'name' => 'Розы и дождь', 'year' => 2014, 'description' => 'холст/масло', 'size' => '80х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '35.jpg', 'name' => 'Ромашки', 'year' => 2015, 'description' => 'холст/масло', 'size' => '70х60', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '36.jpg', 'name' => 'Рыбак и море', 'year' => 2019, 'description' => 'холст/масло', 'size' => '90х120', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '37.jpg', 'name' => 'Скалистые берега', 'year' => 2013, 'description' => 'холст/масло', 'size' => '45х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '38.jpg', 'name' => 'Старый дом.Симеиз', 'year' => 2005, 'description' => 'холст/масло', 'size' => '65х75', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '39.jpg', 'name' => 'Теплый вечер', 'year' => 2019, 'description' => 'холст/масло', 'size' => '20х30', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '40.jpg', 'name' => 'Теплый вечер', 'year' => 2016, 'description' => 'холст/масло', 'size' => '80х120', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '41.jpg', 'name' => 'Тюльпаны', 'year' => 2016, 'description' => 'холст/масло', 'size' => '100х70', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '42.jpg', 'name' => 'Утки', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х40', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '43.jpg', 'name' => 'Ялта', 'year' => 2014, 'description' => 'холст/масло', 'size' => '40х50', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '44.jpg', 'name' => 'Ялта', 'year' => 2015, 'description' => 'холст/масло', 'size' => '70х100', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '45.jpg', 'name' => 'Ялта. Шторм', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 3));
        DB::table('paintings')->insert(array('path' => '46.jpg', 'name' => 'Ялта.Вечер', 'year' => 2014, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 3));
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
