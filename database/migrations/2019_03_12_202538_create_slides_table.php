<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slider_title', 100)->nullable();
            $table->string('slider_subtitle',200)->nullable();
            $table->string('slider_image', 50);

            $table->tinyInteger('button_one')->nullable()->default(0);
            $table->string('button_one_color',30)->nullable();
            $table->string('button_one_link',50)->nullable();
            $table->string('button_one_text',50)->nullable();

            $table->tinyInteger('button_two')->nullable()->default(0);
            $table->string('button_two_color',30)->nullable();
            $table->string('button_two_link',50)->nullable();
            $table->string('button_two_text',50)->nullable();

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
        Schema::dropIfExists('sliders');
    }
}
