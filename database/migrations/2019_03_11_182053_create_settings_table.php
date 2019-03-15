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
            $table->tinyInteger('id')->nullable()->default(1);
            $table->string('co_name',50)->nullable()->default('My Company Name');
            $table->string('co_title',100)->nullable()->default('My Company title');
            $table->string('co_slogan',120)->nullable()->default('A Good slogan of the Company');
            $table->string('co_email',30)->nullable()->default('company-email@comapany.com');
            $table->string('co_phone',20)->nullable()->default('+880 1234567890');
            $table->string('co_address',100)->nullable()->default('Company location address');
            $table->string('co_city',20)->nullable()->default('Company City');
            $table->string('co_country',20)->nullable()->default('Company Country');
            $table->string('co_postal',10)->nullable()->default('Zip Code');
            $table->string('co_keywords',150)->nullable()->default('keyprds', 'tags', 'company', 'google', 'whole seller');
            $table->text('co_description')->nullable('A brief description for the company');
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
