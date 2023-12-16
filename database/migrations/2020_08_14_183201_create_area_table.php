<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->text('adress');
            $table->text('size');
            $table->text('cover');
            $table->text('capacity');
            $table->text('name_admin');
            $table->text('options');
            $table->text('email_admin');
            $table->text('phone_admin');
            $table->integer('id_magenager');
            $table->text('schedule');
            $table->text('rent');
            $table->text('geo_mark');
            $table->text('photo');
            $table->text('display_front');
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
        Schema::dropIfExists('area');
    }
}
