<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Item;
use App\Models\Region;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $regions = Region::all();

        // Retrieve the selected region from the request
        $selectedRegion = $request->input('region');

        // Retrieve the cities based on the selected region
        $cities = $selectedRegion ? City::where('region_id', $selectedRegion)->get() : collect([]);

        // Retrieve the items based on the selected region and city
        $selectedCity = $request->input('city');
        $items = Item::when($selectedRegion, function ($query) use ($selectedRegion) {
            return $query->where('region_id', $selectedRegion);
        })
            ->when($selectedCity, function ($query) use ($selectedCity) {
                return $query->where('city_id', $selectedCity);
            })
            ->latest()
            ->paginate(20);

        return view('items.index', compact('regions', 'selectedRegion', 'cities', 'selectedCity', 'items'));
    }



    public function search(Request $request)
    {
        $regions = Region::all();

        // Retrieve the selected region from the request
        $selectedRegion = $request->input('region');

        // Retrieve the cities based on the selected region
        $cities = $selectedRegion ? City::where('region_id', $selectedRegion)->get() : collect([]);

        // Retrieve the items based on the selected region and city
        $selectedCity = $request->input('city');
        $items = Item::when($selectedRegion, function ($query) use ($selectedRegion) {
            return $query->where('region_id', $selectedRegion);
        })
            ->when($selectedCity, function ($query) use ($selectedCity) {
                return $query->where('city_id', $selectedCity);
            })
            ->latest()
            ->paginate(20);

        return view('items.index', compact('regions', 'selectedRegion', 'cities', 'selectedCity', 'items'));
    }



}
