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
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0000.jpg', 'name' => 'Церковь в Нижней Ореанде', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '54х75', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0004.jpg', 'name' => 'Берега Восточного Крыма', 'year' => 1997, 'description' => 'бумага/акварель', 'size' => '53х72', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0005.jpg', 'name' => 'На берегу окесна', 'year' => 2005, 'description' => 'бумага/акварель', 'size' => '50х65', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0014.jpg', 'name' => 'Берега легенд', 'year' => 2001, 'description' => 'бумага/акварель', 'size' => '50х65', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0010.jpg', 'name' => 'Вечер в Дубаи', 'year' => 2008, 'description' => 'бумага/акварель', 'size' => '50х65', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0006.jpg', 'name' => 'Севастополь. Аполоновка', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0012.jpg', 'name' => 'Полдень', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0008.jpg', 'name' => 'Среди цветов и трав', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0015.jpg', 'name' => 'Весна', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '50х40', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0011.jpg', 'name' => 'Черешня', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '42х59', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0002.jpg', 'name' => 'Тишина', 'year' => 2003, 'description' => 'бумага/акварель', 'size' => '50х65', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0013.jpg', 'name' => 'Флора', 'year' => 2010, 'description' => 'бумага/акварель', 'size' => '65х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0003.jpg', 'name' => 'Весна в Крыму', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '40х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0007.jpg', 'name' => 'Осень. Москва-река', 'year' => 1996, 'description' => 'бумага/акварель', 'size' => '35х47', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0001.jpg', 'name' => 'Зимка', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '35х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190831-WA0009.jpg', 'name' => 'В Гурзуфе', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '37х42', 'artist_id' => 1));
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
