<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAbonementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("abonement", function (Blueprint $table) {
            $table->dropColumn("classes");
            $table->dropColumn("freezing");
            $table->dropColumn("training");
            $table->dropColumn("gift");
            $table->dropColumn("per_month");

            $table->text("included")->nullable();
            $table->boolean("is_transfer")->default(false);
            $table->boolean("is_favorite")->default(false);
            $table->string("profit")->nullable();
            $table->integer("cost_one_training")->nullable();
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
