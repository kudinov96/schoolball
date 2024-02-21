<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldNameForAbonementClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("abonement_club", function (Blueprint $table) {
            $table->renameColumn("tariff_id", "abonement_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("abonement_club", function (Blueprint $table) {
            $table->renameColumn("abonement_id", "tariff_id");
        });
    }
}
