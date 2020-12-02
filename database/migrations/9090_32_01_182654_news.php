<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('news', function (Blueprint $table) {
        /*

        Я не знаю...
        Стоит ли разделять таблицу на подмножества и джойнить их
        На мой взгляд пока что это излишне
        */
            $table->bigIncrements('id');
            $table->string('NameNews');
            $table->string('News');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('news');
    }
}
