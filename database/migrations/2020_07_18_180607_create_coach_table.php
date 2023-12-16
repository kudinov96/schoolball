<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('education');
            $table->integer('license');
            $table->text('career');
            $table->integer('cloth_size');
            $table->text('adress');
            $table->boolean('marital_status');
            $table->boolean('kids');
            $table->integer('seniority');
            $table->boolean('display_front');
            $table->integer('raiting_score');
            $table->text('availability');
            $table->text('document_scan');
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
        Schema::dropIfExists('coach');
    }
}
