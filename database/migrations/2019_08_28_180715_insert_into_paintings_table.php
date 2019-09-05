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
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0046.jpg', 'name' => 'Морской прибой', 'year' => 2010, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0047.jpg', 'name' => 'Вечер в Эмиратах', 'year' => 2009, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0048.jpg', 'name' => 'На берегу Персидского залива', 'year' => 2009, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0049.jpg', 'name' => 'В горах', 'year' => 2011, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0050.jpg', 'name' => 'Эверест', 'year' => 2010, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0051.jpg', 'name' => 'Тишина', 'year' => 2008, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0052.jpg', 'name' => 'В Гурзуфе', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '70х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0075.jpg', 'name' => 'У моря', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0076.jpg', 'name' => 'В Дубаи', 'year' => 2008, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0079.jpg', 'name' => 'Подсолнухи', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '70х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0081.jpg', 'name' => 'День рыбы', 'year' => 2008, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0098.jpg', 'name' => 'Поселок у моря', 'year' => 2007, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0149.jpg', 'name' => 'Утро', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0155.jpg', 'name' => 'Цветы и фрукты', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0156.jpg', 'name' => 'Виноград', 'year' => 2018, 'description' => 'бумага/акварель', 'size' => '45х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0160.jpg', 'name' => 'Персики', 'year' => 2018, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0162.jpg', 'name' => 'Весна', 'year' => 2018, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0164.jpg', 'name' => 'Восточный Крым', 'year' => 2016, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0174.jpg', 'name' => 'Первый снег', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0177.jpg', 'name' => 'Венеция', 'year' => 2011, 'description' => 'бумага/акварель', 'size' => '75х55', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0000.jpg', 'name' => 'Вечер у моря', 'year' => 2016, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0001.jpg', 'name' => 'Прибой', 'year' => 2016, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0003.jpg', 'name' => 'Тихий вечер', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0004.jpg', 'name' => 'Прибой у крымских берегов', 'year' => 2010, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0006.jpg', 'name' => 'Сирень на рассвете', 'year' => 2007, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0007.jpg', 'name' => 'Ромашковое поле', 'year' => 2008, 'description' => 'бумага/акварель', 'size' => '30х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0008.jpg', 'name' => 'Южный дворик', 'year' => 2011, 'description' => 'бумага/акварель', 'size' => '60х50', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0009.jpg', 'name' => 'В саду', 'year' => 2015, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0011.jpg', 'name' => 'Ирисы в саду', 'year' => 2016, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0012.jpg', 'name' => 'Сирень', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х65', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0022.jpg', 'name' => 'Лаванда', 'year' => 2016, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0023.jpg', 'name' => 'На берегу Азова', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0024.jpg', 'name' => 'Ливадия', 'year' => 2018, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0025.jpg', 'name' => 'Калина', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0026.jpg', 'name' => 'Букет сирени', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0039.jpg', 'name' => 'Маки', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '40х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0040.jpg', 'name' => 'Цветение', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '50х70', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0047.jpg', 'name' => 'Вечер у моря', 'year' => 2019, 'description' => 'бумага/акварель', 'size' => '56х76', 'artist_id' => 1));
        DB::table('paintings')->insert(array('path' => 'IMG-20190824-WA0048.jpg', 'name' => 'Париж', 'year' => 2017, 'description' => 'бумага/акварель', 'size' => '50х60', 'artist_id' => 1));
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
