<?php

namespace App\Services\PageData;

class PageDataService
{
    public function getData(string $type, ?string $slug = null): array
    {
        if ($type === 'footballForChildren' || $type === 'index') {
            return FootballForChildrenData::getData($slug);
        }
    }
}
