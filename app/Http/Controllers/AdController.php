<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    public function __invoke()
    {

        // r.firsov1990@yandex.ru
        // c95f7167edb64019dbfc55ab4def8780

        // $login = 'msdays@yandex.ru';
        // $token = '70ac7d4c88ba7746edaa80c5efa58552';

        $settings = Settings::first();
        $login = $settings->login_ad;
        $token = $settings->token_ad;

     //   $login = 'msdays@yandex.ru'; // здесь должен быть ваш логин в системе
     //   $token = '70ac7d4c88ba7746edaa80c5efa58552'; // здесь должен быть ваш access_token

        // задаем время получаемых объявлений, время отстает на 30 минут.
        $date = new \DateTime(); // текущее время
        $date1 = clone $date; // копируем объект даты
        $date1->sub(new \DateInterval('PT46M')); // текущее минус 46 минут
        $date2 = clone $date; // копируем объект даты
        $date2->sub(new \DateInterval('PT31M')); // текущее минус 31 минута
        // таким образом интервал $date1 $date2 у нас будет 15 минут, теперь можно делать запрос

        // формируем url запроса к API
        $url = "https://ads-api.ru/main/api?user=".urlencode($login)."&token=".urlencode($token)
            ."&category_id=1&limit=1000&date1=".urlencode($date1->format('Y-m-d H:i:s'))
            ."&date2=".urlencode($date2->format('Y-m-d H:i:s'));

        // делаем запрос к api
        $str = file_get_contents($url);

        // если предыдущий способ с file_get_contents не работает, то попробуйте через curl (для этого раскомментируйте следующую строку):
        // $str = curlget($url);

        // парсим ответ как json
        $json = json_decode($str);

        // Получаем список регионов из базы данных
        $regions = DB::table('regions')->pluck('id', 'name');

        // Получаем список городов из базы данных
        $cities = DB::table('cities')->pluck('id', 'name');

        // Получаем список уже существующих ad_id в базе данных
        if (isset($json->data) && is_array($json->data) && count($json->data) > 0) {
            $existing_items = DB::table('items')
                ->whereIn('ad_id', collect($json->data)->pluck('avitoid')->toArray())
                ->pluck('ad_id')
                ->toArray();


        // Формируем массив данных для вставки
        $items = [];
        foreach ($json->data as $adv) {
            if (!in_array($adv->avitoid, $existing_items)) {

                // Определяем id региона и города по их названию
                $region_id = isset($regions[$adv->region]) ? $regions[$adv->region] : null;
                $city_id = isset($cities[$adv->city1]) ? $cities[$adv->city1] : null;

                $params = $adv->params ?? [];

                $images = [];
foreach ($adv->images as $image) {
    $images[] = $image->imgurl;
}

                $object_category_id = null;
                $coords = null;
                $coords = $adv->coords->lat . ',' . $adv->coords->lng;

                if($adv->person_type_id == 2) { $agent = 1;} else{ $agent = 0;}


                        // Check if the ad belongs to category 2 and has nedvigimost_type_id equal to 1
if ($adv->cat2_id == 2 && $adv->nedvigimost_type_id == 1) {
    // Get the value of param_1945
    $object_category = isset($adv->param_1945) ? $adv->param_1945 : null;

    // Map object_category to object_category_id

    if($object_category){
    switch ($object_category) {
        case 'Студия':
            $object_category_id = 1;
            break;
        case '1':
            $object_category_id = 2;
            break;
        case '2':
            $object_category_id = 3;
            break;
        // Add more cases for other possible values of param_1945
        case '9':
            $object_category_id = 10;
            break;
    }
} else {
    $object_category_id = 2;

}

}

                $item_data = [
                    'region_id' => $region_id,
                    'city_id' => $city_id,
                    'ad_id' => $adv->avitoid,
                    'type_id' => $adv->nedvigimost_type_id,
                    'category_id' => $adv->cat2_id,
            'title' => $adv->title,
            'description' => $adv->description,
            'name' => $adv->person,
            'address' => $adv->address,
            'phone' => $adv->phone,
            'phone_protected' => $adv->phone_protected,


            'object_category_id' => $object_category_id,


            'coords' => $coords,
            'images' => implode(',', $images),

            'source' => $adv->source,

            'source_id' => $adv->source_id,
            'agent' => $agent,

            'source_url' => $adv->url,


            'km_metro' => $adv->km_do_metro,
            'price' => $adv->price,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ];




        // Получаем и сохраняем дополнительные поля из параметра params

        $items[] = $item_data;
    }
}

// Выполняем массовую вставку
DB::table('items')->insert($items);

return 'Ads added to items table';
}  }
    }
