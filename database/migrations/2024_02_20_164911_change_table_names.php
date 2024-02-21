<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("abonement", "abonement_club");
        Schema::rename("tariff", "abonement");

        Schema::dropIfExists("tariffs_site");

        Schema::table("abonement", function (Blueprint $table) {
            $table->dropColumn("club_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
