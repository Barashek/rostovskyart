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
        DB::table('paintings')->insert(array('path' => 'IMG-20181102-WA0004.jpg', 'name' => 'Когда цветет мушмула', 'year' => 2017, 'description' => 'холст/масло', 'size' => '90х100', 'artist_id' => 2));
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
