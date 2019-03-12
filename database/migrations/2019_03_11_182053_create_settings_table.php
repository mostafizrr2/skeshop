<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('co_name',50)->default('SK Enterprise');
            $table->string('co_title',50)->nullable()->default('Stationaries production and whole seller ');
            $table->string('co_slogan',120)->nullable()->default('A company for the new items');
            $table->string('co_email',30)->nullable()->default('info@sk-enterprise.com');
            $table->string('co_phone',20)->nullable()->default('+880 1880-937822');
            $table->string('co_address',100)->nullable()->default('Shital Jharna R/A, Oxygen, Chattogram');
            $table->string('co_city',20)->nullable()->default('Chattogram');
            $table->string('co_country',20)->nullable()->default('Bangladesh');
            $table->string('co_postal',10)->nullable()->default('4210');
            $table->string('co_keywords',150)->nullable()->default('pen, pencil, stationaries, burmese foods', 'whole seller');
            $table->text('co_description')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
