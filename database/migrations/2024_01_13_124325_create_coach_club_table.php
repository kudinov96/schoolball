<?php

use App\Models\Club;
use App\Models\Coach;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_club', function (Blueprint $table) {
            $table->id();
            $table->foreignId("coach_id")->constrained("coach")->cascadeOnDelete();
            $table->foreignId("club_id")->constrained("club")->cascadeOnDelete();
        });

        $coachs = Coach::query()->get();
        foreach ($coachs as $coach) {
            $club = Club::query()->where("id", $coach->club_id)->first();

            $coach->clubs()->attach($club);
        }

        Schema::table("coach", function (Blueprint $table) {
            $table->dropColumn("coach_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coach_club');
    }
}
