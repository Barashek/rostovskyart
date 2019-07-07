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
        DB::table('paintings')->insert(array(
            'path' => 'Ирисы.jpg',
            'name' => 'Ирисы',
            'year' => 2018,
            'description' => 'х/м',
            'size' => '80x40',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Глициния.jpg',
            'name' => 'Глициния',
            'year' => 2017,
            'description' => 'х/м',
            'size' => '90х50',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Натюрморт с кувшином.jpg',
            'name' => 'Натюрморт с кувшином',
            'year' => 2019,
            'description' => 'х/м',
            'size' => '70х90',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Натюрморт с тыквой.jpg',
            'name' => 'Натюрморт с тыквой',
            'year' => 2018,
            'description' => 'х/м',
            'size' => '70х80',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Натюрморт с тыквой.jpg',
            'name' => 'Натюрморт с тыквой',
            'year' => 2018,
            'description' => 'х/м',
            'size' => '70х80',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Натюрморт.jpg',
            'name' => 'Натюрморт',
            'year' => 2017,
            'description' => 'х/м',
            'size' => '70х80',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Розы.jpg',
            'name' => 'Розы',
            'year' => 2016,
            'description' => 'х/м',
            'size' => '90х50',
            'artist_id' => 2
        ));
        DB::table('paintings')->insert(array(
            'path' => 'Пейзаж.jpg',
            'name' => 'Пейзаж',
            'year' => 2016,
            'description' => 'б/акв',
            'size' => '50х70',
            'artist_id' => 1
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
