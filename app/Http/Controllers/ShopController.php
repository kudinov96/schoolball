<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Auth;
use View;
use Intervention\Image\Facades\Image;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Категории магазина

    public function indexCategoryShop() {

        $crmtable = DB::table('shop_categories')->orderBy('id', 'DESC')->get();


        $nameroute = "Категории магазина";
        return view('login/shop/categoryList')


            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }

    public function indexCategoryShopNew()
    {



        $nameroute = "Создание новой категории";
        return view('login/shop/categoryNew')

            ->with("nameroute", $nameroute);
    }

    public function indexCategoryShopEdit($id)
    {


        $category = DB::table('shop_categories')
            ->where('id', $id)
            ->first();


        $nameroute = "Редактирование категории ";
        return view('login/shop/categoryEdit')

            ->with("category", $category)
            ->with("nameroute", $nameroute);

    }


    public function createCategoryShop(Request $data)
    {

        if ($data->isMethod('POST')) {



            DB::table('shop_categories')->insert([
                'name' => $data['name'],

            ]);

            return redirect()->route('categoryList');

        }

        if ($data->isMethod('GET')) {
            return $this->indexCategoryShopNew();
        }
    }

    public function categoryShopEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {


            DB::table('shop_categories')
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],

                ]);


            return redirect()->route('categoryList');
        } else if ($data->isMethod("GET")) {
            return $this->indexCategoryShopEdit($id);
        }
    }


    public function categoryDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('shop_categories')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('categoryList');

    }




    // Товары магазина


    public function indexProduct() {

        $crmtable = DB::table('shop')->orderBy('id', 'DESC')->get();
        $nameroute = "Товары магазина";

        return view('login/shop/productList')

            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);

    }

    public function indexProductNew()
    {

        $categories = DB::table('shop_categories')->orderBy('id', 'DESC')->get();

        $nameroute = "Добавление нового товара";
        return view('login/shop/productNew')
            ->with("categories", $categories)
            ->with("nameroute", $nameroute);
    }

    public function indexProductEdit($id)
    {
        $categories = DB::table('shop_categories')->orderBy('id', 'DESC')->get();


        $product = DB::table('shop')
            ->where('id', $id)
            ->first();


        $nameroute = "Редактирование товара ";
        return view('login/shop/productEdit')
            ->with("categories", $categories)

            ->with("product", $product)
            ->with("nameroute", $nameroute);

    }



    public function createProduct(Request $data)
    {

        if ($data->isMethod('POST')) {

            $sizes = json_encode($data->input('sizes', []));
            $colors = json_encode($data->input('colors', []));

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/shop/products');
            }else {
                $path_image = '';

            }


            DB::table('shop')->insert([
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'description' => $data['description'],
                'composition' => $data['composition'],
                'care' => $data['care'],
                'price' => $data['price'],
                'price_discount' => $data['price_discount'],
                'colors' =>  $colors,
                'sizes' => $sizes,
                'images' => $path_image,
            ]);

            return redirect()->route('productList');

        }

        if ($data->isMethod('GET')) {
            return $this->indexProductNew();
        }
    }

    public function productEdit(Request $data, $id)
    {


        if ($data->isMethod("POST")) {

            $sizes = json_encode($data->input('sizes', [])); // Или используйте implode для разделения запятыми
            $colors = json_encode($data->input('colors', [])); // Или используйте implode для разделения запятыми

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/shop/products');
                DB::table('shop')
                    ->where('id', $id)
                    ->update([
                        'images' => $path_image
                    ]);
            }


            DB::table('shop')
                ->where('id', $id)
                ->update([
                    'category_id' => $data['category_id'],
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'composition' => $data['composition'],
                    'care' => $data['care'],
                    'price' => $data['price'],
                    'price_discount' => $data['price_discount'],
                    'colors' =>  $colors,
                    'sizes' =>  $sizes,

                ]);


            return redirect()->route('productList');
        } else if ($data->isMethod("GET")) {
            return $this->indexProductEdit($id);
        }
    }


    public function productDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('shop')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('productList');

    }



}
