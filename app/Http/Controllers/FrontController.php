<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Abonement;
use App\Models\Club;
use App\Services\PageData\PageDataService;
use Auth;
use DB;
use GuzzleHttp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use View;

class FrontController extends Controller
{
    /**
     * @var PageDataService
     */
    private $pageDataService;

    public function __construct(PageDataService $pageDataService)
    {
        $this->pageDataService = $pageDataService;
    }

    public function index_quiz() {


        return view('quiz');
    }


    public function index_404() {


        return view('404');
    }


    public function index_clubslist() {


        $clubList = DB::table('club')
             ->where('club.display_front', 1)
            ->orderBy('club.check_metro', 'DESC')
            ->orderBy('club.metro', 'ASC')->get();
      return view('clubslist')
        ->with("clubs", $clubList)
        ;
    }



    public function selectTariff(Request $request){
        if($request->ajax()){
            $tariffs = DB::table('tariffs_site')
                 ->where('club_id', $request->id)
                ->get();

            $cards = DB::select("SELECT * from tariffs_site where
                                      id in( select min(id)
                                    from tariffs_site group by `group_id`) ORDER by `group_id` ASC");



            $group_age = DB::table('group_age')
                ->get();

            $clubs = DB::table('club')
                ->get();

            //  $cities = City::where('id_country',$request->id)->get()->pluck("name","id");
            $data = view('select',['tariffs' => $tariffs, 'group_age' => $group_age, 'cards' =>  $cards,
               'clubs' => $clubs])->render();
            return response()->json(['options'=>$data]);
        }
    }



    public function selectTariffMob(Request $request){
        if($request->ajax()){
            $tariffs = DB::table('tariffs_site')
                ->where('club_id', $request->id)
                ->get();

            $cards = DB::select("SELECT * from tariffs_site where
                                      id in( select min(id)
                                    from tariffs_site group by `group_id`) ORDER by `group_id` ASC");


            $clubs = DB::table('club')
                ->get();
            $group_age = DB::table('group_age')
                ->get();



            //  $cities = City::where('id_country',$request->id)->get()->pluck("name","id");
            $data = view('select-mob',['tariffs' => $tariffs, 'group_age' => $group_age, 'cards' =>  $cards,
                'clubs' => $clubs
            ])->render();
            return response()->json(['options'=>$data]);
        }
    }


    public function index_methods($id) {
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();

      return view('methods')
        ->with("clublist", $clublist)
        ->with("id", $id);
    }

    public function index_club($id) {
      $club = DB::table('club')
        ->join('area', 'club.id_area', '=', 'area.id')
        ->join('users', 'club.id_manager', '=', 'users.id')
        ->select('club.*', 'area.photo', 'area.adress', 'area.geo_mark','users.phone_number', 'area.options')
        ->where('club.slug', $id)
        ->first();
        $clubArray = DB::table('club')
            ->join('area', 'club.id_area', '=', 'area.id')
            ->join('users', 'club.id_manager', '=', 'users.id')
            ->select('club.*', 'area.photo', 'area.adress', 'area.geo_mark','users.phone_number', 'area.options')
            ->where('club.slug', $id)
            ->first();
        if($clubArray){
            $clubNorm = Club::query()->where("slug", $id)->first();
            $allcoachs = $clubNorm->coaches()->with("user")->get();
        }
        if (is_object($club) && isset($club->options)) {
            $arroption = str_split($club->options);
        } else {
            $arroption = '';
        }

        $clubModel = Club::query()->where("slug", $id)->first();


        $group_age = DB::table('group_age')
            ->get();

        $section = DB::table('group_section')
            ->get();

        $schedule = DB::table('training_schedule')
              ->where('club_id', $clubArray->id)
            ->orderBy('group_section_id', 'ASC')

            ->get();



        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.coords', 'club.address', 'club.*')
            ->where('club.display_front', 1)
            ->get();

        $cards = DB::select("SELECT * from training_schedule where
                                    club_id=$clubArray->id AND group_age_id in( select min(group_age_id)
                                    from training_schedule group by `group_age_id`) ORDER by `group_age_id` ASC");

        /*$cards_price = DB::select("SELECT * from tariffs_site where
                                      id in( select min(id)
                                    from tariffs_site group by `group_id`) ORDER by `group_id` ASC");*/


        $main = DB::table('main_index')
            ->where('id', 1)
            ->first();

        return view('club')
        ->with("clublist", $clublist)
        ->with("allcoachs", $allcoachs)
          ->with("clubArray", $clubArray)
          ->with("schedule", $schedule)
          ->with("cards", $cards)
            ->with("section", $section)
          ->with("clubModel", $clubModel)
          ->with("group_age", $group_age)
            ->with("main", $main)
            /*->with("cards_price", $cards_price)*/

          ->with("id", $id)
        ->with("arroption", $arroption)
        ->with("club", $club);
    }

    public function index_news() {
      $arrnews = DB::table('news')
        ->get();
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();
      return view('news')
        ->with("clublist", $clublist)
        ->with("arrnews", $arrnews);
    }

    public function index_post($id) {
      $post = DB::table('news')
        ->where('id', $id)
        ->first();
      $lastnews = DB::table('news')
        ->take(3)
        ->get();
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();
      return view('post')
        ->with("clublist", $clublist)
        ->with("id", $id)
        ->with("lastnews", $lastnews)
        ->with("post", $post);
    }

    // Блог
    public function index_blog() {
        $arrblog = DB::table('blog')
            ->orderBy('id', 'DESC')
            ->get();

        return view('blog')

            ->with("arrblog", $arrblog);
    }

    public function index_blogpost($id) {
        $post = DB::table('blog')
            ->where('id', $id)
            ->first();

        return view('blogpost')
            ->with("id", $id)
            ->with("post", $post);
    }

//

    public function catalog2(Request $request)
    {
        $query = DB::table('catalog_camp');
        $month = $request->input('month');
        $type = $request->input('type');

        $massiv = 0;
        if (!empty($month) && is_string($month)) {
            $month = explode(',', $month);
        }

        if (!empty($month) && is_array($month)) {
            $query->where(function ($query) use ($month) {
                foreach ($month as $m) {
                    $startDate = date('Y-m-01', strtotime("2023-$m-01"));
                    $endDate = date('Y-m-t', strtotime("2023-$m-01"));
                    $query->orWhereBetween('date_from', [$startDate, $endDate])
                        ->orWhereBetween('date_to', [$startDate, $endDate]);
                }
            });
            $massiv = 1;
        }

        if (!empty($type)) {
            $query->where('type', $type);
        }
        $query->where('display_front', 1);

        $sort = $request->input('sort');
        if (!empty($sort)) {
            $query->orderBy('date_from', $sort);
        } else {
            $query->orderBy('date_from', 'ASC');
        }

        $catalog = $query->get();

        // Возвращаем частичное представление с содержимым карточек
        return view('cards')->with('catalog', $catalog);
    }

    public function catalog(Request $request)
    {
        $query = DB::table('catalog_camp');
        $month = $request->input('month');
        $type = $request->input('type');
        $query->where('display_front', 1);

        if (!empty($month)) {
            $query->where(function ($query) use ($month) {
                foreach ($month as $m) {
                    $startDate = date('Y-m-01', strtotime("2023-$m-01"));
                    $endDate = date('Y-m-t', strtotime("2023-$m-01"));
                    $query->orWhereBetween('date_from', [$startDate, $endDate])
                        ->orWhereBetween('date_to', [$startDate, $endDate]);
                }
            });
        }

        if (!empty($type)) {
            $query->where('type', $type);
        }

        $catalog = $query->orderBy('date_from', 'ASC')->get();


        // Возвращаем частичное представление с содержимым карточек
        return view('catalog')->with('catalog', $catalog);
    }


    public function home_index2(Request $request) {
        $utm_source = $request->get('utm_source'); // yandexx utm
        $utm_campaign = $request->get('utm_campaign'); // yandexx utm

        list($cards,
            $tariffs,
            $lastnews,
            $arrupstudents,
            $clublist,
            $allcoachs,
            $group_age,
            $main
        ) = $this->pageDataService->getData("footballForChildren");

      //  https://schoolball.ru/vk на https://schoolball.ru/home?utm_source=vk&utm_medium=social&utm_campaign=bio

        if($utm_source == 'yandex') {
            if ($utm_campaign == 'luch') {
                return Redirect::to('https://schoolball.ru/club_luch', 301);
            }
            if ($utm_campaign == 'nika') {
                return Redirect::to('https://schoolball.ru/club_nika', 301);
            }
            if ($utm_campaign == 'vershina') {
                return Redirect::to('https://schoolball.ru/club_vershina', 301);
            }
            if ($utm_campaign == 'gladiator') {
                return Redirect::to('https://schoolball.ru/club_gladiator', 301);
            }
            if ($utm_campaign == 'flagman') {
                return Redirect::to('https://schoolball.ru/club_flagman', 301);
            }
            if ($utm_campaign == 'lotos') {
                return Redirect::to('https://schoolball.ru/club_lotos', 301);
            }
            if ($utm_campaign == 'halk') {
                return Redirect::to('https://schoolball.ru/club_halk', 301);
            }
            if ($utm_campaign == 'spartak') {
                return Redirect::to('https://schoolball.ru/club_spartak', 301);
            }
            if ($utm_campaign == 'start') {
                return Redirect::to('https://schoolball.ru/club_start', 301);
            }
            if ($utm_campaign == 'zevs') {
                return Redirect::to('https://schoolball.ru/club_zevs', 301);
            }
            if ($utm_campaign == 'kosmos') {
                return Redirect::to('https://schoolball.ru/club_kosmos', 301);
            }
            if ($utm_campaign == 'favorit') {
                return Redirect::to('https://schoolball.ru/club_favorit', 301);
            }

            if ($utm_campaign == 'favorit') {
                return Redirect::to('https://schoolball.ru/club_favorit', 301);
            }

            if ($utm_campaign == 'dragv') {
                return Redirect::to('https://schoolball.ru/club_dragv', 301);
            }

            if ($utm_campaign == 'korona') {
                return Redirect::to('https://schoolball.ru/club_korona', 301);
            }

            if ($utm_campaign == 'djoker') {
                return Redirect::to('https://schoolball.ru/club_djoker', 301);
            }

            if ($utm_campaign == 'molot') {
                return Redirect::to('https://schoolball.ru/club_molot', 301);
            }

            if ($utm_campaign == 'olimp') {
                return Redirect::to('https://schoolball.ru/club_olimp', 301);
            }

            if ($utm_campaign == 'krilya') {
                return Redirect::to('https://schoolball.ru/club_krilya', 301);
            }

            if ($utm_campaign == 'brilliant') {
                return Redirect::to('https://schoolball.ru/club_brilliant', 301);
            }

            if ($utm_campaign == 'tigri') {
                return Redirect::to('https://schoolball.ru/club_tigri', 301);
            }

            if ($utm_campaign == 'molniya') {
                return Redirect::to('https://schoolball.ru/club_molniya', 301);
            }
            if ($utm_campaign == 'zhemchuzhina') {
                return Redirect::to('https://schoolball.ru/club_zhemchuzhina', 301);
            }

        }

        $index_abonements = \Illuminate\Support\Facades\DB::table("options")
            ->where("key" , "index_abonements")
            ->first();
        $index_abonements = json_decode($index_abonements->value, true);

        $abonements = Abonement::query()->whereIn("id", $index_abonements)->get();

        return view('home_index_2')
            ->with("abonements", $abonements)
            ->with("lastnews", $lastnews)
            ->with("clublist", $clublist)
            ->with("cards", $cards)
            ->with("main", $main)
            ->with("tariffs", $tariffs)
            ->with("group_age", $group_age)
            ->with("arrupstudents", $arrupstudents)
            ->with("allcoachs", $allcoachs)
            ->with("index_abonements", $index_abonements);

    }

    public function home_index(Request $request) {


    $utm_source = $request->get('utm_source'); // yandexx utm
     $utm_campaign = $request->get('utm_campaign'); // yandexx utm

        if($utm_source == 'yandex') {
            if ($utm_campaign == 'luch') {
                return Redirect::to('https://schoolball.ru/club_luch', 301);
            }
            if ($utm_campaign == 'nika') {
                return Redirect::to('https://schoolball.ru/club_nika', 301);
            }
            if ($utm_campaign == 'vershina') {
                return Redirect::to('https://schoolball.ru/club_vershina', 301);
            }
            if ($utm_campaign == 'gladiator') {
                return Redirect::to('https://schoolball.ru/club_gladiator', 301);
            }
            if ($utm_campaign == 'flagman') {
                return Redirect::to('https://schoolball.ru/club_flagman', 301);
            }
            if ($utm_campaign == 'lotos') {
                return Redirect::to('https://schoolball.ru/club_lotos', 301);
            }
            if ($utm_campaign == 'halk') {
                return Redirect::to('https://schoolball.ru/club_halk', 301);
            }
            if ($utm_campaign == 'spartak') {
                return Redirect::to('https://schoolball.ru/club_spartak', 301);
            }
            if ($utm_campaign == 'start') {
                return Redirect::to('https://schoolball.ru/club_start', 301);
            }
            if ($utm_campaign == 'zevs') {
                return Redirect::to('https://schoolball.ru/club_zevs', 301);
            }
            if ($utm_campaign == 'kosmos') {
                return Redirect::to('https://schoolball.ru/club_kosmos', 301);
            }
            if ($utm_campaign == 'favorit') {
                return Redirect::to('https://schoolball.ru/club_favorit', 301);
            }

            if ($utm_campaign == 'favorit') {
                return Redirect::to('https://schoolball.ru/club_favorit', 301);
            }

            if ($utm_campaign == 'dragv') {
                return Redirect::to('https://schoolball.ru/club_dragv', 301);
            }

            if ($utm_campaign == 'korona') {
                return Redirect::to('https://schoolball.ru/club_korona', 301);
            }

            if ($utm_campaign == 'djoker') {
                return Redirect::to('https://schoolball.ru/club_djoker', 301);
            }

            if ($utm_campaign == 'molot') {
                return Redirect::to('https://schoolball.ru/club_molot', 301);
            }

            if ($utm_campaign == 'olimp') {
                return Redirect::to('https://schoolball.ru/club_olimp', 301);
            }

            if ($utm_campaign == 'krilya') {
                return Redirect::to('https://schoolball.ru/club_krilya', 301);
            }

            if ($utm_campaign == 'brilliant') {
                return Redirect::to('https://schoolball.ru/club_brilliant', 301);
            }

            if ($utm_campaign == 'tigri') {
                return Redirect::to('https://schoolball.ru/club_tigri', 301);
            }

            if ($utm_campaign == 'molniya') {
                return Redirect::to('https://schoolball.ru/club_molniya', 301);
            }
            if ($utm_campaign == 'zhemchuzhina') {
                return Redirect::to('https://schoolball.ru/club_zhemchuzhina', 301);
            }

        }
        $lastnews = DB::table('news')
            ->take(3)
            ->get();
        $arrupstudents = DB::table('upstudent')
            ->get();
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.coords', 'club.address', 'club.*')
            ->where('club.display_front', 1)
            ->get();
        $allcoachs = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.name', 'users.photo', 'users.social_vk', 'users.social_fb', 'users.social_inst', 'users.surname', 'users.secondname', 'coach.*')

            ->where('coach.display_front', 1)
            ->orderBy('coach.seniority', 'ASC')
            ->get();
        return view('home_index')
            ->with("lastnews", $lastnews)
            ->with("clublist", $clublist)
            ->with("arrupstudents", $arrupstudents)
            ->with("allcoachs", $allcoachs);

    }

    public function index() {
      $lastnews = DB::table('news')
        ->take(3)
        ->get();
      $arrupstudents = DB::table('upstudent')
        ->get();
      $clublist = DB::table('club')
        ->select('club.id', 'club.name', 'club.coords', 'club.address', 'club.*')
        ->where('club.display_front', 1)
        ->get();
      $allcoachs = DB::table('coach')
        ->join('users', 'coach.user_id', '=', 'users.id')
        ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
        ->where('coach.display_front', 1)
        ->get();
      return view('welcome')
        ->with("lastnews", $lastnews)
        ->with("clublist", $clublist)
        ->with("arrupstudents", $arrupstudents)
        ->with("allcoachs", $allcoachs);
    }

    public function index_championats() {
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();

      return view('championats')
        ->with("clublist", $clublist);
    }

    public function index_faq() {
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();

      return view('faq')
        ->with("clublist", $clublist);
    }


    public function index_referal() {

        return view('referal');

    }



    public function index_login() {
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();

      return view('auth.login')
        ->with("clublist", $clublist);
    }

    public function index_register() {
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();

      return view('auth.register')
        ->with("clublist", $clublist);
    }




    public function backCall2(Request $request) {
        if ($request) {
            $phone = preg_replace('![^0-9]+!', '', $request['phone']);

            if($request['name']){
                $name = $request['name'];
            }else{
                $name = 'Клиент';
            }

            $ga_cookie = $_COOKIE['_ga'] ?? ''; // take GA cookie

        $client = new GuzzleHttp\Client();

        // id_splead
     $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name='.$name.'&about=Callback&leadfrom=9&url_owner='.$ga_cookie);
            // echo $res->getStatusCode(); // 200

            DB::table('request')->insert([
                'from' => 'Сайт',
                'name' => $name,
                'phone' => $phone,
                'ga_cookie' => $ga_cookie, // insert GA cookie into DB
                'email' => $request['email'],
                'club_id' => $request['club'],
                'age' => $request['age'],
                'text' => 'Заявка на обратный звонок с сайта.',
                'created_at' => date("Y-m-d H:i:s"),
                'path' => $request['path'] // insert path into DB
            ]);

            return "DONE!";
        }
    }


    public function backCallProduct(Request $request) {
        if ($request) {
            $phone = preg_replace('![^0-9]+!', '', $request['phone']);

            if($request['name']){
                $name = $request['name'];
            }else{
                $name = 'Клиент';
            }

            $colorMap = [
                '#FFFFFF' => 'Белый',
                '#F5F5DC' => 'Бежевый',
                '#FFFF00' => 'Желтый',
                '#FFD700' => 'Золотой',
                '#FFA500' => 'Оранжевый',
                '#008000' => 'Зеленый',
                '#00008B' => 'Темно-синий',
                '#FFC0CB' => 'Розовый',
                '#FF0000' => 'Красный',
                '#808080' => 'Серый',
                '#A52A2A' => 'Коричневый',
                '#000000' => 'Черный',
                '#40E0D0' => 'Бирюзовый',
                '#0000FF' => 'Синий',
                '#8A2BE2' => 'Фиолетовый',
                '#F0E68C' => 'Хаки',
                'black_red' => 'Черно-красный',
                '#B22222' => 'Бордовый',
                '#ADD8E6' => 'Голубой',
                '#696969' => 'Темно-серый',
            ];



            $product_name = $request['product_name'];
            $product_color = $request['product_color'];
            $product_size = $request['product_size'];


            $text = "Товар - {$product_name}, Цвет - {$product_color}, Размер - {$product_size}";


            $ga_cookie = $_COOKIE['_ga'] ?? ''; // take GA cookie

            $client = new GuzzleHttp\Client();

            // id_splead
          //  $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name='.$name.'&about=Callback&leadfrom=9&url_owner='.$ga_cookie);
            // echo $res->getStatusCode(); // 200


            DB::table('request')->insert([
                'from' => 'Сайт',
                'name' => $name,
                'phone' => $phone,
                'ga_cookie' => $ga_cookie, // insert GA cookie into DB
                'email' => $request['email'],
                'club_id' => $request['club'],
                'age' => $request['age'],
                'text' => 'Заявка на товар в магазине - '.$text,
                'created_at' => date("Y-m-d H:i:s"),
                'path' => $request['path'] // insert path into DB
            ]);

            return "DONE!";
        }
    }

    public function backCall3(Request $data) {
        if ( $data) {
            $phone = preg_replace('![^0-9]+!', '', $data['phone']);

            if($data['name']){
                $name = $data['name'];
            }else{
                $name = 'Клиент';
            }


            // Отправка в спортлид
            $client = new GuzzleHttp\Client();
       //   $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name=Клиент&about=Callback&leadfrom=9');
            $ga_cookie = $_COOKIE['_ga'] ?? ''; // take GA cookie

      $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name='.$name.'&about=Callback&leadfrom=9&url_owner='.$ga_cookie);
            $path = $data['path'] ?? 'Не указано';

            DB::table('request')->insert([
                'from' => 'Сайт',
                'name' =>  $name,
                'ga_cookie' => $ga_cookie, // insert GA cookie into DB

                'path' => $path,
                'phone' => $phone,
                'email' => $data['email'],
                'club_id' => $data['club'],
                'age' => $data['age'],
                'text' => 'Скачивание рекомендаций от психолога.',
                'created_at' => date("Y-m-d H:i:s"),
            ]);


            return "DONE!";
        }

    }

    public function backCall4(Request $data) {
        if ( $data) {
            $phone = preg_replace('![^0-9]+!', '', $data['phone']);

            if($data['name']){
                $name = $data['name'];
            }else{
                $name = 'Клиент';
            }

            // Отправка в спортлид
            $client = new GuzzleHttp\Client();
            $ga_cookie = $_COOKIE['_ga'] ?? ''; // take GA cookie
       $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name='.$name.'&about=Callback&leadfrom=9&url_owner='.$ga_cookie);

            $path = $data['path'] ?? 'Не указано';

            $program_id = $data['program_id'];
            $program = DB::table('catalog_program')
                ->where('id', $program_id)
                ->first();
            $pdf_url = str_replace('public', 'storage', asset($program->program));

            DB::table('request')->insert([
                'from' => 'Сайт',
                'name' => $name,
                'ga_cookie' => $ga_cookie, // insert GA cookie into DB
                'path' => $path,
                'phone' => $phone,
                'email' => $data['email'],
                'club_id' => $data['club'],
                'age' => $data['age'],
                'text' => 'Скачивание программы ' . $program->topic,
                'created_at' => date("Y-m-d H:i:s"),
            ]);

            return response()->json(['pdf_url' => $pdf_url]);


        }
    }


    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storePublicly('public/images');
            $url = Storage::url($path);
            return response()->json(['url' => $url]);
        }
    }



    public function backCallPhone(Request $data)
    {
        if ( $data) {
            $value = $data->cookie('_ga');

            $phone = preg_replace('![^0-9]+!', '', $data['phone']);

            $client = new GuzzleHttp\Client();
            $ga_cookie = $_COOKIE['_ga'] ?? ''; // take GA cookie

            $client->get('https://sportlead.ru/sball/api/v1/import/sballru?tel='.$phone.'&name=Клиент&about=Callback&leadfrom=9&url_owner='.$ga_cookie);



            DB::table('request')->insert([
                'from' => 'Сайт',
                'name' => '1',
                'phone' => $phone,
                'club_id' => $data['club'],
                'age' => $data['age'],
                'ga_cookie' => $ga_cookie, // insert GA cookie into DB

                'text' => 'Заявка на обратный звонок с сайта.',
                'created_at' => date("Y-m-d H:i:s"),
            ]);

            return "DONE!  $value";

        }

    }


    public function backCall(Request $data, $id) {

      if ($id == 1) {

        $phone = preg_replace('![^0-9]+!', '', $data['phone']);

        $parentid = DB::table('users')
          ->select('users.id')
          ->where('users.phone_number', '=', $phone)
          ->first();

        if (!isset($parentid)) {
          DB::table('users')->insert([
            'name' => $data['name'],
            'phone_number' => $phone,
            'created_at' => date("Y-m-d H:i:s"),
          ]);
          $parentid = DB::table('users')
            ->select('users.id')
            ->where('users.phone_number', '=', $phone)
            ->first();
        }

        $fi = explode(" ", $data['name_kid']);
        $datebirth = date("Y-m-d", strtotime($data['date-birth-kid']));

        $kidsid = DB::table('kids')
          ->select('kids.id')
          ->where('kids.parent_id', '=', $parentid->id)
          ->where('kids.surname_kid', '=', $fi[0])
          ->where('kids.name_kid', '=', $fi[1])
          ->where('kids.date_birth_kid', '=', $datebirth)
          ->first();

        if (!isset($kidsid)) {
          DB::table('kids')->insert([
            'parent_id' => $parentid->id,
            'surname_kid' => $fi[0],
            'name_kid' => $fi[1],
            'date_birth_kid' => $datebirth,
          ]);

          $kidsid = DB::table('kids')
            ->select('kids.id')
            ->where('kids.parent_id', '=', $parentid->id)
            ->where('kids.surname', '=', $fi[0])
            ->where('kids.name', '=', $fi[1])
            ->where('kids.date_birth_kid', '=', $datebirth)
            ->first();
        }

        DB::table('crm_status')->insert([
          'user_id' => $parentid->id,
          'kid_id' => $kidsid->id,
          'entry_point' => 1,
          'club_id' => $data['club'],
          'date_create' => date("Y-m-d H:i:s"),
          'datetime_nextcall' => date("Y-m-d H:i:s", time() + 11100),
          'comment' => 'Перезвонить в ближайшее время',
          'status' => 2,
        ]);

        return "DONE!";

      } else if ($id == 2) {

        DB::table('request')->insert([
          'from' => 'Сайт',
          'name' => $data['name'],
          'phone' => $data['phone'],
          'club_id' => $data['club'],
          'age' => $data['age'],
          'text' => 'Заявка на обратный звонок с сайта. (тренировочная программа на год)',
          'created_at' => date("Y-m-d H:i:s"),
        ]);

        if ($data['age'] == "3-4 года") {
          return "assets/doc/prog3-4.pdf";
        }
        if ($data['age'] == "5-7 лет") {
          return "assets/doc/prog5-7.pdf";
        }
        if ($data['age'] == "8-10 лет") {
          return "assets/doc/prog8-10.pdf";
        }
        if ($data['age'] == "11-12 лет") {
          return "assets/doc/prog11-12.pdf";
        }
        if ($data['age'] == "13-16 лет") {
          return "assets/doc/prog13-16.pdf";
        }

      }

    }



    public function shop2(Request $request)
    {
        $query = DB::table('shop');

        $category = $request->input('type');

        $massiv = 0;

        if (!empty($category)) {
            $query->where('category_id', $category);
        }

        $sort = $request->input('sort');
        if (!empty($sort)) {
            if ($sort == 'price_desc') {
                $query->orderBy('price', 'DESC');
            } else {
                $query->orderBy('id', $sort);
            }
        } else {
            $query->orderBy('id', 'DESC');
        }

        $catalog = $query->get();

        // Возвращаем частичное представление с содержимым карточек
        return view('shop.products')->with('catalog', $catalog);
    }



    public function index_shop() {

        $categoriesWithCount = DB::table('shop_categories')
            ->select('shop_categories.*', DB::raw('COUNT(shop.id) as product_count'))
            ->leftJoin('shop', 'shop.category_id', '=', 'shop_categories.id')
            ->groupBy('shop_categories.id', 'shop_categories.name' )
            ->orderBy('id', 'DESC')
            ->get();

        $query = DB::table('shop');

        if (!empty($category)) {
            $query->where('category', $category);
        }

        $catalog = $query->orderBy('id', 'DESC')->get();

        // Возвращаем частичное представление с содержимым карточек
        return view('shop.index')->with('catalog', $catalog)->with('categories', $categoriesWithCount);

    }

    public function view_shop($id) {



        $product = DB::table('shop')
            ->where('id', $id)
            ->first();
        $category = DB::table('shop_categories')
            ->where('id', $product->category_id)
            ->first();



        // Возвращаем частичное представление с содержимым карточек
        return view('shop.view')->with([
                'product' => $product,
                'category' => $category,
            ]);



    }


    public function index_camp() {

      $allcoachs = DB::table('coach')
        ->join('users', 'coach.user_id', '=', 'users.id')
        ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
        ->where('coach.display_front', 1)
        ->get();
      return view('camp.main')
        ->with("allcoachs", $allcoachs);
    }


    public function index_camp2() {



            //  https://schoolball.ru/vk на https://schoolball.ru/home?utm_source=vk&utm_medium=social&utm_campaign=bio




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
                ->where('coach.display_front_camp', 1)
                ->orderBy('coach.seniority', 'ASC')
                ->get();


            $group_age = DB::table('group_age')
                ->get();

            $main = DB::table('camp')
                ->where('id', 1)
                ->first();

            return view('camp2')
                ->with("lastnews", $lastnews)
                ->with("clublist", $clublist)
                ->with("cards", $cards)
                ->with("main", $main)
                ->with("tariffs", $tariffs)
                ->with("group_age", $group_age)
                ->with("arrupstudents", $arrupstudents)
                ->with("allcoachs", $allcoachs);


    }


    public function index_wekeend() {


        /*$cards = DB::select("SELECT * from tariffs_site where
                                      id in( select min(id)
                                    from tariffs_site group by `group_id`) ORDER by `group_id` ASC");*/


        /*$tariffs = DB::table('tariffs_site')
            ->where('default_public', 'on')
            ->orderBy('price', 'ASC')
            ->get();*/


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
            ->where('coach.display_front_camp', 1)
            ->orderBy('coach.seniority', 'ASC')
            ->get();


        $allreviews = DB::table('reviews')

             ->where('main', 1)
            ->orderBy('id', 'ASC')
            ->get();


        $schedules = DB::table('schedule_wekeends')
            ->get();
        $group_age = DB::table('group_age')
            ->get();

        $main = DB::table('wekeends')
            ->where('id', 1)
            ->first();

            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Выходные', pages)")->get();


        return view('wekeends')
            ->with("lastnews", $lastnews)
            ->with("clublist", $clublist)
            ->with("cards", $cards)
            ->with("main", $main)
            //->with("tariffs", $tariffs)
            ->with("group_age", $group_age)
            ->with("arrupstudents", $arrupstudents)
            ->with("reviews", $allreviews)
            ->with("schedule", $schedules)
            ->with("videos", $videos)
            ->with("allcoachs", $allcoachs);

    }
    public function index_district_old($district) {

        $allcoachs = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
            ->where('coach.display_front', 1)
            ->get();


        $main = DB::table('wekeends')
            ->where('id', 1)
            ->first();


        $main_cao = DB::table('wekeends')
            ->where('id', 2)
            ->first();

        $main_uvao = DB::table('wekeends')
            ->where('id', 3)
            ->first();




        $videos = DB::table('reviews_video')
            ->where('display_front', 1)
            ->orderBy('id', 'ASC')
            ->get();

        $programs = DB::table('catalog_program')
             ->where('display_front', 1)
            ->orderBy('id', 'ASC')

            ->get();

        if ($district == 'cao') {
            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Киевская', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 2)
                ->orderBy('id', 'ASC')
                ->get();
            return view('camp_old.cao')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_cao)
                ->with("schedule", $schedule)
                ->with("programs", $programs)

                ->with("videos", $videos);
        }
        if ($district == 'uvao') {
            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Кузьминки', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 3)
                ->orderBy('id', 'ASC')
                ->get();

            return view('camp_old.uvao')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_uvao)
                ->with("schedule", $schedule)

                ->with("videos", $videos);
        }
        if ($district == 'undermos') {
            return view('camp.undermos')
                ->with("allcoachs", $allcoachs)
                ->with("videos", $videos);

        }
    }

    public function index_championship() {

        $allcoachs = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
            ->where('coach.display_front', 1)
            ->get();


        $main = DB::table('wekeends')
            ->where('id', 1)
            ->first();


        $main_cao = DB::table('wekeends')
            ->where('id', 6)
            ->first();

        $main_uvao = DB::table('wekeends')
            ->where('id', 3)
            ->first();


        $main_gorizont = DB::table('wekeends')
            ->where('id', 4)
            ->first();

        $main_dmitrov = DB::table('wekeends')
            ->where('id', 5)
            ->first();


        $videos = DB::table('reviews_video')
            ->where('display_front', 1)
            ->orderBy('id', 'ASC')
            ->get();


        $uniform_images = DB::table('champioship_uniform')
            ->where('id', 1)
            ->first();



            $price_timer = '';
            $allcoachs = DB::table('coach')
                ->join('users', 'coach.user_id', '=', 'users.id')
                ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                ->where('coach.display_front', 1)
                ->whereRaw("FIND_IN_SET('Киевская', pages)")
                ->get();
            $programs = DB::table('catalog_program')
                ->where('display_front', 1)
                ->where('page', 'cao')
                ->orderBy('id', 'ASC')
                ->get();

            $daily = DB::table('daily_schedule')
                ->where('page', 2)
                ->orderBy('id', 'ASC')
                ->get();

            $camp_price = DB::table('camp_price')
                ->where('page', 2)
                ->orderBy('id', 'ASC')
                ->get();

            $camp_details = DB::table('camp_details')
                ->where('page', 2)
                ->orderBy('id', 'ASC')
                ->get();
        $champioship_calendar = DB::table('champioship_calendar')

            ->orderBy('id', 'ASC')
            ->get();
        $grouped_champioship_calendar = $champioship_calendar->groupBy('season');

        $group_age_championship = DB::table('group_age_championship')
            ->orderBy('group_age_id', 'ASC')
            ->get();

        $grouped_championship_season = DB::table('champioship_season')
            ->join('group_age_championship', 'champioship_season.group_age_id', '=', 'group_age_championship.group_age_id')
            ->orderBy('champioship_season.points', 'DESC')
            ->get();

        $grouped_championship_player = DB::table('champioship_player_season')
            ->join('group_age_championship', 'champioship_player_season.group_age_id', '=', 'group_age_championship.group_age_id')
            ->orderBy('champioship_player_season.points', 'DESC')
            ->get();

            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Киевская', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 2)
                ->orderBy('id', 'ASC')
                ->get();
            return view('camp.championship')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_cao)
                ->with("schedule", $schedule)
                ->with("programs", $programs)
                ->with("price_timer", $price_timer)
                ->with("daily_schedule", $daily)
                ->with("camp_price", $camp_price)
                ->with("camp_details", $camp_details)
                ->with("grouped_champioship_calendar", $grouped_champioship_calendar)
                ->with("group_age_championship", $group_age_championship)
                ->with("grouped_championship_season", $grouped_championship_season)
                ->with("grouped_championship_player", $grouped_championship_player)
                ->with("uniform_images", $uniform_images)

                ->with("videos", $videos);



    }

    public function index_district($district) {

      $allcoachs = DB::table('coach')
        ->join('users', 'coach.user_id', '=', 'users.id')
        ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
        ->where('coach.display_front', 1)
        ->get();


        $main = DB::table('wekeends')
            ->where('id', 1)
            ->first();


        $main_cao = DB::table('wekeends')
            ->where('id', 2)
            ->first();

        $main_uvao = DB::table('wekeends')
            ->where('id', 3)
            ->first();


        $main_gorizont = DB::table('wekeends')
            ->where('id', 4)
            ->first();

        $main_dmitrov = DB::table('wekeends')
            ->where('id', 5)
            ->first();


        $main_hotkovo = DB::table('wekeends')
            ->where('id', 8)
            ->first();

        $videos = DB::table('reviews_video')
            ->where('display_front', 1)
            ->orderBy('id', 'ASC')
            ->get();







            if ($district == 'cao') {

                $price_timer = '';
                $allcoachs = DB::table('coach')
                    ->join('users', 'coach.user_id', '=', 'users.id')
                    ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                    ->where('coach.display_front', 1)
                    ->whereRaw("FIND_IN_SET('Киевская', pages)")
                    ->get();
                $programs = DB::table('catalog_program')
                    ->where('display_front', 1)
                    ->where('page', 'cao')
                    ->orderBy('id', 'ASC')
                    ->get();

                $daily = DB::table('daily_schedule')
                    ->where('page', 2)
                    ->orderBy('id', 'ASC')
                    ->get();

                $camp_price = DB::table('camp_price')
                    ->where('page', 2)
                    ->orderBy('id', 'ASC')
                    ->get();

                $camp_details = DB::table('camp_details')
                    ->where('page', 2)
                    ->orderBy('id', 'ASC')
                    ->get();


                $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Киевская', pages)")->get();
              $schedule = DB::table('camp_grafic')
              ->where('page', 2)
              ->orderBy('id', 'ASC')
              ->get();
              return view('camp.cao')
                  ->with("allcoachs", $allcoachs)
                  ->with("main", $main_cao)
                  ->with("schedule", $schedule)
                  ->with("programs", $programs)
                  ->with("price_timer", $price_timer)
                  ->with("daily_schedule", $daily)
                  ->with("camp_price", $camp_price)
                  ->with("camp_details", $camp_details)

                  ->with("videos", $videos);
          }


          if ($district == 'uvao') {

        $price_timer = '';
              $allcoachs = DB::table('coach')
                  ->join('users', 'coach.user_id', '=', 'users.id')
                  ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                  ->where('coach.display_front', 1)
                  ->whereRaw("FIND_IN_SET('Кузьминки', pages)")
                  ->get();
              $programs = DB::table('catalog_program')
                  ->where('display_front', 1)
                  ->where('page', 'uvao')
                  ->orderBy('id', 'ASC')
                  ->get();


              $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Кузьминки', pages)")->get();
              $schedule = DB::table('camp_grafic')
              ->where('page', 3)
              ->orderBy('id', 'ASC')
              ->get();

              return view('camp.uvao')
                  ->with("allcoachs", $allcoachs)
                  ->with("main", $main_uvao)
                  ->with("schedule", $schedule)
                  ->with("programs", $programs)
                  ->with("price_timer", $price_timer)

                  ->with("videos", $videos);
          }



        if ($district == 'gorizont') {

            $price_timer = '';
            $allcoachs = DB::table('coach')
                ->join('users', 'coach.user_id', '=', 'users.id')
                ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                ->where('coach.display_front', 1)
                ->whereRaw("FIND_IN_SET('Горизонт', pages)")
                ->get();
            $programs = DB::table('catalog_program')
                ->where('display_front', 1)
                ->where('page', 'gorizont')
                ->orderBy('id', 'ASC')
                ->get();


            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Горизонт', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 4)
                ->orderBy('id', 'ASC')
                ->get();

            return view('camp.gorizont')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_gorizont)
                ->with("schedule", $schedule)
                ->with("programs", $programs)
                ->with("price_timer", $price_timer)

                ->with("videos", $videos);
        }

        if ($district == 'dmitrov') {

            $price_timer = '';
            $allcoachs = DB::table('coach')
                ->join('users', 'coach.user_id', '=', 'users.id')
                ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                ->where('coach.display_front', 1)
                ->whereRaw("FIND_IN_SET('Дмитров', pages)")
                ->get();
            $programs = DB::table('catalog_program')
                ->where('display_front', 1)
                ->where('page', 'dmitrov')
                ->orderBy('id', 'ASC')
                ->get();

            $camp_details = DB::table('camp_details')
                ->where('page', 5)
                ->orderBy('id', 'ASC')
                ->get();

            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Дмитров', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 5)
                ->orderBy('id', 'ASC')
                ->get();

            $daily = DB::table('daily_schedule')
                ->where('page', 5)
                ->orderBy('id', 'ASC')
                ->get();

            return view('camp.dmitrov')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_dmitrov)
                ->with("schedule", $schedule)
                ->with("programs", $programs)
                ->with("price_timer", $price_timer)
                ->with("daily_schedule", $daily)
                ->with("camp_details", $camp_details)
                ->with("videos", $videos);
        }
        if ($district == 'hotkovo') {

            $price_timer = '';
            $allcoachs = DB::table('coach')
                ->join('users', 'coach.user_id', '=', 'users.id')
                ->select('users.name', 'users.photo', 'users.surname', 'users.secondname', 'coach.*')
                ->where('coach.display_front', 1)
                ->whereRaw("FIND_IN_SET('Хотьково', pages)")
                ->get();
            $programs = DB::table('catalog_program')
                ->where('display_front', 1)
                ->where('page', 'hotkovo')
                ->orderBy('id', 'ASC')
                ->get();

            $camp_details = DB::table('camp_details')
                ->where('page', 8)
                ->orderBy('id', 'ASC')
                ->get();

            $videos = DB::table('reviews_video')->where('display_front', true)->whereRaw("FIND_IN_SET('Хотьково', pages)")->get();
            $schedule = DB::table('camp_grafic')
                ->where('page', 8)
                ->orderBy('id', 'ASC')
                ->get();

            $daily = DB::table('daily_schedule')
                ->where('page', 8)
                ->orderBy('id', 'ASC')
                ->get();

            return view('camp.hotkovo')
                ->with("allcoachs", $allcoachs)
                ->with("main", $main_hotkovo)
                ->with("schedule", $schedule)
                ->with("programs", $programs)
                ->with("price_timer", $price_timer)
                ->with("daily_schedule", $daily)
                ->with("camp_details", $camp_details)
                ->with("videos", $videos);
        }
        if ($district == 'undermos') {
        return view('camp.undermos')
          ->with("allcoachs", $allcoachs)
            ->with("videos", $videos);

      }
    }

    public function sendCampInfo(Request $data) {

      DB::table('crm_status_camp')->insert([
        'user_name' => $data['name'],
        'user_phone' => preg_replace('![^0-9]+!', '', $data['phone']),
        'kid_name' => $data['name_kid'],
        'kid_datebirth' => date("Y-m-d", strtotime($data['date-birth-kid'])),
        'entry_point' => 1,
        'location' => $data['district'].$data['time'],
        'date_create' => date("Y-m-d H:i:s"),
        'datetime_nextcall' => date("Y-m-d H:i:s", time() + 11100),
        'comment' => 'Перезвонить в ближайшее время',
        'status' => 2,
      ]);

      return "DONE!";

    }

}
