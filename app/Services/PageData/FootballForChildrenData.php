<?php

namespace App\Services\PageData;

use Illuminate\Support\Facades\DB;

class FootballForChildrenData
{
    public static function getData(?string $slug = null)
    {
        $cards = DB::select("SELECT * from tariffs_site where
                                      id in( select min(id)
                                    from tariffs_site group by `group_id`) ORDER by `group_id` ASC");

        $tariffs = DB::table('tariffs_site')
            ->where('default_public', 'on')
            ->orderBy('price', 'ASC')
            ->get();

        $lastnews = DB::table('news')
            ->take(3)
            ->get();

        $arrupstudents = DB::table('upstudent')
            ->get();

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.coords', 'club.address', 'club.*')
            ->where('club.display_front', 1)
            ->orderBy('club.check_metro', 'DESC')
            ->orderBy('club.metro', 'ASC')
            ->get();

        $allcoachs = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.name', 'users.photo', 'users.social_vk', 'users.social_fb', 'users.social_inst', 'users.surname', 'users.secondname', 'coach.*')
            ->where('coach.display_front', 1)
            ->orderBy('coach.seniority', 'ASC')
            ->get();

        $group_age = DB::table('group_age')
            ->get();

        $main = DB::table('main_index')
            ->where('id', 1)
            ->first();

        $ageText = null;
        $seoBlock = null;
        if ($slug === "3-let") {
            $ageText = "3";
            $seoBlock = view("pages.football-for-children.seo-blocks.3")->render();
        } else if ($slug === "4-5-let") {
            $ageText = "4-5";
            $seoBlock = view("pages.football-for-children.seo-blocks.4-5")->render();
        } else if ($slug === "6-9-let") {
            $ageText = "6-9";
            $seoBlock = view("pages.football-for-children.seo-blocks.6-9")->render();
        } else if ($slug === "10-14-let") {
            $ageText = "10-14";
            $seoBlock = view("pages.football-for-children.seo-blocks.10-14")->render();
        }

        return [
            $cards,
            $tariffs,
            $lastnews,
            $arrupstudents,
            $clublist,
            $allcoachs,
            $group_age,
            $main,
            $ageText,
            $seoBlock,
        ];
    }
}
