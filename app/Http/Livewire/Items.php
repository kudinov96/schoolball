<?php

namespace App\Http\Livewire;
use App\Models\Type;
use App\Models\Category;
use App\Models\City;
use App\Models\Item;
use App\Models\Region;
use Livewire\Component;
use Livewire\WithPagination;


class Items extends Component
{
    use WithPagination;

    public $active;
    public $searchName;
    public $searchId;
    public $priceFrom;
    public $priceTo;
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $categories = [];
    public $category;
    public $types = [];
    public $type;
    public $regions = [];
    public $region;
    public $cities = [];
    public $city;
    public $object_category = [];
    public $object_category_id = [];
    public $isFindButtonClicked = false;


    public function render()
    {
         $items = collect([]);
         $query = Item::query();
 
 
        if ($this->active) {
            $query->active();
        }

        if ($this->isFindButtonClicked) {
        if ($this->searchName) {
            $query->where('name', 'like', '%' . $this->searchName . '%');
        }

        if ($this->searchId) {
            $query->where('id', $this->searchId);
        }

        if ($this->priceFrom) {
            $query->where('price', '>=', $this->priceFrom);
        }

        if ($this->priceTo) {
            $query->where('price', '<=', $this->priceTo);
        }


    }

        if ($this->category !== null) {
            $query->where('category_id', $this->category);
        }

        if (!empty($this->object_category_id)) {
            $query->whereIn('object_category_id', $this->object_category_id);
        }
        


        if ($this->type !== null) {
            $query->where('type_id', $this->type);
        }

        if ($this->region !== null) {
            $query->where('region_id', $this->region);
        }

        if ($this->city !== null) {
            $query->where('city_id', $this->city);
        }
   
        $items = $query->orderBy($this->sortBy, $this->sortDirection)->paginate(25);
  
        return view('livewire.items', [
            'items' => $items
        ]);

    }

    public function mount($category = null, $type = null, $search = null)
    {
        $this->categories = Category::all();
        $this->types = Type::all();
        $this->regions = Region::all();

        if ($category) {
            $this->category = $category;
        }

        if ($type) {
            $this->type = $type;
        }

        if ($search) {
            $searchValues = explode(',', $search);
            $this->searchName = $searchValues[0] ?? null;
            $this->searchId = $searchValues[1] ?? null;
           $this->priceFrom = $searchValues[2] ?? null;
          $this->priceTo = $searchValues[3] ?? null;
        }
    }

    public function getSearchQueryString()
    {
        $searchArray = [
            $this->searchName,
            $this->searchId,
            $this->priceFrom,
            $this->priceTo,
        ];

        return implode(',', $searchArray);
    }

    public function sortBy($field)
    {
        $this->sortField = $field;

        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }
    }

    public function updatedCategory($categoryId)
    {
        if (!empty($categoryId)) {
            $category = Category::find($categoryId);
            $this->object_category = $category->objectCategories->pluck('name', 'id');
        } else {
            $this->object_category = [];
        }
    }

    public function updatedRegion($regionId)
{
    if (!empty($regionId)) {
        $region = Region::find($regionId);
        $this->cities = $region->cities;
    } else {
        $this->cities = [];
    }
    $this->city = null;
}

public function updatedCity($cityId)
{
    $this->city = $cityId;
}

public function loadCities()
{
    if (!empty($this->region)) {
        $this->cities = City::where('region_id', $this->region)->get();
    } else {
        $this->cities = [];
    }
}

public function find()
{
     $this->isFindButtonClicked = true;

     $this->resetPage();


}

 


    public function updatingActive(){
        $this->resetPage();
    }
}
