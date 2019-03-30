<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->timestamps();
        });


        Schema::create('template_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('length');
            $table->integer('width');
            $table->integer('template_type_id')->unsigned();
            $table->foreign('template_type_id')->references('id')->on('templates');
            $table->timestamps();
        });

        Schema::create('gardens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('template_id')->unsigned();
            $table->foreign('template_id')->references('id')->on('templates');
            $table->timestamps();
        });

        Schema::create('garden_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('garden_id')->unsigned();
            $table->foreign('garden_id')->references('id')->on('gardens');
            $table->integer('outdoor_humidity');
            $table->integer('outdoor_temperature');
            $table->boolean('is_day');
            $table->date('last_rain');
            $table->timestamps();
        });

        Schema::create('garden_plants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('garden_id')->unsigned();
            $table->foreign('garden_id')->references('id')->on('gardens');
            $table->string('type');
            $table->integer('humidity');
            $table->date('last_sprinkling');
            $table->integer('min_humidity');
            $table->date('last_sprinkling_fertilizer');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('template_type');
        Schema::dropIfExists('template');
        Schema::dropIfExists('gardens');
        Schema::dropIfExists('garden_properties');
        Schema::dropIfExists('garden_plants');
        Schema::dropIfExists('password_resets');
    }
}
