<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('users', function (Blueprint $table) {
             $table->string('surname', 100)->nullable();
             $table->string('secondname', 100)->nullable();
             $table->string('phone_number', 100)->nullable();
             $table->binary('sex')->nullable();
             $table->string('location', 100)->nullable();
             $table->date('date_birth')->nullable();
             $table->string('social_fb', 100)->nullable();
             $table->string('social_vk', 100)->nullable();
             $table->string('social_inst', 100)->nullable();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
