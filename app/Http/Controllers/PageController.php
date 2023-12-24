<?php

namespace App\Http\Controllers;

use App\Services\MetaTagsService;
use App\Services\PageData\PageDataService;

class PageController extends Controller
{
    private $pageDataService;
    private $metaTagsService;

    public function __construct(PageDataService $pageDataService, MetaTagsService $metaTagsService)
    {
        $this->pageDataService = $pageDataService;
        $this->metaTagsService = $metaTagsService;
    }

    public function footballForChildren(string $slug)
    {
        $pageSlugs = [
            '3-let',
            '4-5-let',
            '6-9-let',
            '10-14-let',
        ];

        if (!in_array($slug, $pageSlugs)) {
            abort(404);
        }

        list($cards,
            $tariffs,
            $lastnews,
            $arrupstudents,
            $clublist,
            $allcoachs,
            $group_age,
            $main,
            $ageText,
            $seoBlock
        ) = $this->pageDataService->getData("footballForChildren", $slug);

        list($h1, $title, $description) = $this->metaTagsService->footballForChildren($slug);

        return view('pages.football-for-children.index')
            ->with("lastnews", $lastnews)
            ->with("clublist", $clublist)
            ->with("cards", $cards)
            ->with("main", $main)
            ->with("tariffs", $tariffs)
            ->with("group_age", $group_age)
            ->with("arrupstudents", $arrupstudents)
            ->with("allcoachs", $allcoachs)
            ->with("slug", $slug)
            ->with("h1", $h1)
            ->with("title", $title)
            ->with("description", $description)
            ->with("ageText", $ageText)
            ->with("seoBlock", $seoBlock);
    }
}
