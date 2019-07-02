<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAtristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            //
        });
        DB::table('artists')->insert(array(
            'name' => 'Ростовский В.К.',
        ));
        DB::table('artists')->insert(array(
            'name' => 'Ростовский К.В.',
        ));
        DB::table('artists')->insert(array(
            'name' => 'Ростовский В.В.',
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            //
        });
    }
}
