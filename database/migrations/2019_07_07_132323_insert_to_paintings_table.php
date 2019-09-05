<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertToPaintingsTable extends Migration
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
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0003.jpg', 'name' => 'Ялта. Штиль', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60x80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0004.jpg', 'name' => 'Когдда цветет мушмула', 'year' => 2017, 'description' => 'холст/масло', 'size' => '90х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0005.jpg', 'name' => 'Глициния в цвету. Ялта', 'year' => 2017, 'description' => 'холст/масло', 'size' => '80х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0006.jpg', 'name' => 'Весенние букеты', 'year' => 2017, 'description' => 'холст/масло', 'size' => '100х90', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0007.jpg', 'name' => 'Цветы и фрукты', 'year' => 2018, 'description' => 'холст/масло', 'size' => '80х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0008.jpg', 'name' => 'Осенняя пора', 'year' => 2017, 'description' => 'холст/масло', 'size' => '90х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0009.jpg', 'name' => 'Сирень', 'year' => 2017, 'description' => 'холст/масло', 'size' => '80х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0010.jpg', 'name' => 'Ромашки. Начало лета', 'year' => 2018, 'description' => 'холст/масло', 'size' => '70х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0012.jpg', 'name' => 'Розы', 'year' => 2017, 'description' => 'холст/масло', 'size' => '80х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0013.jpg', 'name' => 'Весенний вечер', 'year' => 2016, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0014.jpg', 'name' => 'Лаванда', 'year' => 2016, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0015.jpg', 'name' => 'Персик цветет', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0025.jpg', 'name' => 'Весенний этюд. Краснокаменка', 'year' => 2017, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0026.jpg', 'name' => 'Весенний этюд', 'year' => 2015, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0027.jpg', 'name' => 'В Персидском заливе', 'year' => 2013, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0028.jpg', 'name' => 'В бухте Чехова. Гурзуф', 'year' => 2015, 'description' => 'холст/масло', 'size' => '40х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0029.jpg', 'name' => 'Вечерняя лаванда', 'year' => 2016, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0066.jpg', 'name' => 'Балаклава. Вечер', 'year' => 2016, 'description' => 'холст/масло', 'size' => '60х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0067.jpg', 'name' => 'Вечер. Крым. Бухта Ласпи', 'year' => 2017, 'description' => 'холст/масло', 'size' => '35х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0070.jpg', 'name' => 'Владимирский собор. Херсонес', 'year' => 2017, 'description' => 'холст/масло', 'size' => '100х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0071.jpg', 'name' => 'Весенние букеты', 'year' => 2017, 'description' => 'холст/масло', 'size' => '80х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0072.jpg', 'name' => 'Париж', 'year' => 2015, 'description' => 'холст/масло', 'size' => '70х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0073.jpg', 'name' => 'Балаклава', 'year' => 2015, 'description' => 'холст/масло', 'size' => '70х90', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0083.jpg', 'name' => 'Ялта. Февраль', 'year' => 2015, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0085.jpg', 'name' => 'Весна. Крым', 'year' => 2014, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0086.jpg', 'name' => 'Глициния', 'year' => 2016, 'description' => 'холст/масло', 'size' => '50х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0087.jpg', 'name' => 'Летние букеты', 'year' => 2016, 'description' => 'холст/масло', 'size' => '110х90', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0088.jpg', 'name' => 'Кувшины и фрукты', 'year' => 2005, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0089.jpg', 'name' => 'Глициния. Симеиз', 'year' => 2017, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0091.jpg', 'name' => 'Лавандовые поля', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0092.jpg', 'name' => 'Весна. Гурзуф', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0093.jpg', 'name' => 'Крымская веснаа', 'year' => 2017, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0094.jpg', 'name' => 'Весеннее настроение', 'year' => 2013, 'description' => 'холст/масло', 'size' => '90х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0095.jpg', 'name' => 'Лето', 'year' => 2014, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0104.jpg', 'name' => 'Осенние виноградники', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0110.jpg', 'name' => 'Пейзаж', 'year' => 2012, 'description' => 'холст/масло', 'size' => '90х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0111.jpg', 'name' => 'Весеннее утро. Крымская весна', 'year' => 2019, 'description' => 'холст/масло', 'size' => '80х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0112.jpg', 'name' => 'Осень в Крыму', 'year' => 2019, 'description' => 'холст/масло', 'size' => '80х120', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0113.jpg', 'name' => 'Весна', 'year' => 2016, 'description' => 'холст/масло', 'size' => '60х65', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0114.jpg', 'name' => 'Лавандовые поля. Крым', 'year' => 2018, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0115.jpg', 'name' => 'Которский залив. Этюд', 'year' => 2009, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0116.jpg', 'name' => 'Тепллая осень. Крым', 'year' => 2012, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0117.jpg', 'name' => 'Солнечный свет', 'year' => 2010, 'description' => 'холст/масло', 'size' => '550х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0118.jpg', 'name' => 'Испания. Кадакес', 'year' => 2010, 'description' => 'холст/масло', 'size' => '80х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0119.jpg', 'name' => 'Хризантемы', 'year' => 2009, 'description' => 'холст/масло', 'size' => '70х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0120.jpg', 'name' => 'Крымский этюд. Дождь прошел', 'year' => 2011, 'description' => 'холст/масло', 'size' => '45х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0121.jpg', 'name' => 'Серебряный ветер. Дом поэта', 'year' => 1997, 'description' => 'холст/масло', 'size' => '100х130', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0122.jpg', 'name' => 'Розовые розы', 'year' => 2015, 'description' => 'холст/масло', 'size' => '60х110', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0123.jpg', 'name' => 'Вечер в Коктебеле', 'year' => 2011, 'description' => 'холст/масло', 'size' => '40х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0124.jpg', 'name' => 'Морской бриз. Крым', 'year' => 2012, 'description' => 'холст/масло', 'size' => '40х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0126.jpg', 'name' => 'Теплая осень', 'year' => 2010, 'description' => 'холст/масло', 'size' => '50х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0128.jpg', 'name' => 'Розы', 'year' => 2014, 'description' => 'холст/масло', 'size' => '90х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0129.jpg', 'name' => 'Подмосковье. Октябрь', 'year' => 2010, 'description' => 'холст/масло', 'size' => '30х35', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0130.jpg', 'name' => 'Лаванда', 'year' => 2016, 'description' => 'холст/масло', 'size' => '120х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0131.jpg', 'name' => 'Скоро весна', 'year' => 2009, 'description' => 'холст/масло', 'size' => '35х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0132.jpg', 'name' => 'Оттепель', 'year' => 2009, 'description' => 'холст/масло', 'size' => '30х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0133.jpg', 'name' => 'Хорошее настроение', 'year' => 2016, 'description' => 'холст/масло', 'size' => '80х90', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0134.jpg', 'name' => 'Подмосковье. Март', 'year' => 2009, 'description' => 'холст/масло', 'size' => '30х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0135.jpg', 'name' => 'Весенние букеты', 'year' => 2015, 'description' => 'холст/масло', 'size' => '80х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0136.jpg', 'name' => 'Дары осени', 'year' => 2015, 'description' => 'холст/масло', 'size' => '100х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0137.jpg', 'name' => 'Скоро весна. Подмосковье', 'year' => 1996, 'description' => 'холст/масло', 'size' => '30х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0138.jpg', 'name' => 'Балаклава', 'year' => 2012, 'description' => 'холст/масло', 'size' => '50х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0145.jpg', 'name' => 'Розы у моря', 'year' => 2018, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0146.jpg', 'name' => 'Теплая осень', 'year' => 2018, 'description' => 'холст/масло', 'size' => '70х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0148.jpg', 'name' => 'Сенттябрь. Подмосковье', 'year' => 2011, 'description' => 'холст/масло', 'size' => '30х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0150.jpg', 'name' => 'Розы у моря', 'year' => 2018, 'description' => 'холст/масло', 'size' => '60х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0151.jpg', 'name' => 'Утренний чай в мае', 'year' => 2018, 'description' => 'холст/масло', 'size' => '90х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0152.jpg', 'name' => 'У моря. Крым', 'year' => 2018, 'description' => 'холст/масло', 'size' => '70х55', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0153.jpg', 'name' => 'Розы у фонтана', 'year' => 2018, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0154.jpg', 'name' => 'Морской прибой. Ореанда', 'year' => 2018, 'description' => 'холст/масло', 'size' => '35х50', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0157.jpg', 'name' => 'Осенний этюд', 'year' => 2010, 'description' => 'холст/масло', 'size' => '30х40', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0161.jpg', 'name' => 'Нарцисы', 'year' => 2016, 'description' => 'холст/масло', 'size' => '60х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0165.jpg', 'name' => 'Алыча в цвету', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0166.jpg', 'name' => 'Весна. Нарцисы', 'year' => 2016, 'description' => 'холст/масло', 'size' => '70х80', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0169.jpg', 'name' => 'Ялта. Яхты', 'year' => 2016, 'description' => 'холст/масло', 'size' => '45х60', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0170.jpg', 'name' => 'Весенний этюд. Ореанда', 'year' => 2018, 'description' => 'холст/масло', 'size' => '50х70', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0175.jpg', 'name' => 'Натюрморт с хурмой и виноградом', 'year' => 2010, 'description' => 'холст/масло', 'size' => '90х100', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'IMG-20181111-WA0181.jpg', 'name' => 'Лето. Цветы и фрукты', 'year' => 2018, 'description' => 'холст/масло', 'size' => '75х85', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'коктебель.jpg', 'name' => 'Вечер в Коктебеле', 'year' => 2008, 'description' => 'холст/масло', 'size' => '45х90', 'artist_id' => 2));
        DB::table('paintings')->insert(array('path' => 'персики в цвету.jpg', 'name' => 'Весна. Крым', 'year' => 2016, 'description' => 'холст/масло', 'size' => '45х70', 'artist_id' => 2));
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
