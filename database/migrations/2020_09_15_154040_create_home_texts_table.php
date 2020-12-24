<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('first_title');
            $table->text('first_brief');
            $table->text('first_main_text');
            $table->text('second_title');
            $table->text('second_main_text');
            $table->text('third_title');
            $table->text('fourth_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_texts');
    }
}
