<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Auth;
use View;


class CrmController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index_clients() {

      $crmtable = DB::table('crm_status')
          ->join('users', 'users.id', '=', 'crm_status.user_id')
          ->join('kids', 'kids.id_kid', '=', 'crm_status.kid_id')
          ->leftJoin('club', 'crm_status.club_id', '=', 'club.id')
          ->select('users.id', 'users.surname', 'users.name', 'users.photo', 'users.email', 'users.add_phone', 'users.phone_number', 'users.channel_join', 'users.telegram_id', 'kids.id_kid', 'kids.surname_kid', 'kids.name_kid', 'kids.photo_kid', 'kids.date_birth_kid', 'kids.amplua_kid', 'kids.level_kid', 'crm_status.*', 'club.id_manager')
          ->orderBy('crm_status.status', 'asc')
          ->get();
      $managers = DB::table('users')
          ->select('users_roles.user_id', 'users.name', 'users.surname')
          ->join('users_roles', 'users_roles.user_id', '=', 'users.id')
          ->where('users_roles.role_id', '=', '2')
          ->get();
      $clubs = DB::table('club')
          ->select('club.id', 'club.name')
          ->get();
      $clublist = DB::table('club')
        ->select('club.id', 'club.name')
        ->where('club.display_front', 1)
        ->get();
      $nameroute = "Список клиентов";
      return view('login/crm/clients')
        ->with("clublist", $clublist)
        ->with("clubs", $clubs)
        ->with("managers", $managers)
        ->with("crmtable", $crmtable)
        ->with("nameroute", $nameroute);

    }

    // Расписание занятий клуба

    public function index_schedule() {

        $crmtable = DB::table('training_schedule')->orderBy('id', 'DESC')->get();

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')

            ->get();

        $groupage  = DB::table('group_age')
            ->get();

        $grouplist = DB::table('group_section')
            ->get();

        $nameroute = "Расписание занятий ";
        return view('login/schedule/scheduleList')
            ->with("crmtable", $crmtable)
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)

            ->with("grouplist", $grouplist)

            ->with("nameroute", $nameroute);

    }

    // Стоимость

    public function index_price($id) {

        $crmtable = DB::table('camp_price')->where(['page'=> $id])->orderBy('id', 'ASC')->get();

        $list = $id;

        $nameroute = "Стоимость ";
        return view('login/price/priceList')
            ->with("crmtable", $crmtable)
            ->with("list", $list)

            ->with("nameroute", $nameroute);

    }


    public function index_details($id) {

        $crmtable = DB::table('camp_details')->where(['page'=> $id])->orderBy('id', 'ASC')->get();

        $list = $id;

        $nameroute = "Табы с информацией ";
        return view('login/details/detailsList')
            ->with("crmtable", $crmtable)
            ->with("list", $list)

            ->with("nameroute", $nameroute);
    }


    // График смен лагерей

    public function index_dailyschedule($id) {

        $crmtable = DB::table('daily_schedule')->where(['page'=> $id])->orderBy('id', 'ASC')->get();

        $list = $id;

        $nameroute = "Расписание распорядка дня  ";
        return view('login/daily_schedule/dailyList')
            ->with("crmtable", $crmtable)
            ->with("list", $list)

            ->with("nameroute", $nameroute);

    }


    // сорвенования


    public function index_champion() {

        $nameroute = "Соревнования";
        return view('login/championship/index')

            ->with("nameroute", $nameroute);

    }


    // График смен лагерей

    public function index_campschedule($id) {

        $crmtable = DB::table('camp_grafic')->where(['page'=> $id])->orderBy('id', 'DESC')->get();

         $list = $id;

        $nameroute = "Расписание распорядка дня  ";
        return view('login/camp_grafic/campgraficList')
            ->with("crmtable", $crmtable)
            ->with("list", $list)

            ->with("nameroute", $nameroute);

    }



    // Расписание weekend

    public function index_scheduleweekend() {

        $crmtable = DB::table('schedule_wekeends')->orderBy('id', 'DESC')->get();



        $nameroute = "Расписание распорядка дня  ";
        return view('login/schedule_weekend/scheduleweekendList')
            ->with("crmtable", $crmtable)

            ->with("nameroute", $nameroute);

    }


    // Тарифы

    public function index_tarifflist() {

        $crmtable = DB::table('tariffs_site')->orderBy('id', 'DESC')->get();

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')

            ->get();

        $groupage  = DB::table('group_age')
            ->get();

        $grouplist = DB::table('group_section')
            ->get();

        $nameroute = "Тарифы  ";
        return view('login/tarifflist/tarifflistList')
            ->with("crmtable", $crmtable)
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)

            ->with("grouplist", $grouplist)

            ->with("nameroute", $nameroute);

    }


    // Программы
    public function index_program() {

        $crmtable = DB::table('catalog_program')->orderBy('id', 'DESC')->get();


        $nameroute = "Программы лагеря ";
        return view('login/program/programList')


            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }


    // Тарифы на абонементы
    public function index_catcamp() {

        $crmtable = DB::table('catalog_camp')->orderBy('id', 'DESC')->get();


        $nameroute = "Каталог лагерей Школы мяча ";
        return view('login/catcamp/catcampList')


            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }

    //

    // Тарифы на абонементы
    public function index_tariff() {

        $crmtable = DB::table('tariff')->orderBy('id', 'DESC')->get();


        $nameroute = "Тарифы ";
        return view('login/tariff/tariffList')


            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }



    // Календарь соревнований

    public function index_calendar() {

        $crmtable = DB::table('champioship_calendar')->orderBy('id', 'DESC')->get();



        $nameroute = "Календарь соревнований ";
        return view('login/champ_calendar/calendarList')

            ->with("crmtable", $crmtable)

            ->with("nameroute", $nameroute);


    }


    // Таблица сезона

    public function index_season() {

        $crmtable = DB::table('champioship_season')->orderBy('id', 'DESC')->get();


        $groupage  = DB::table('group_age_championship')
            ->get();
        $nameroute = "Календарь соревнований ";
        return view('login/champ_season/seasonList')

            ->with("crmtable", $crmtable)
            ->with("groupage", $groupage)

            ->with("nameroute", $nameroute);


    }


    public function index_season_player() {

        $crmtable = DB::table('champioship_player_season')->orderBy('id', 'DESC')->get();


        $groupage  = DB::table('group_age_championship')
            ->get();
        $nameroute = "Таблица участников ";
        return view('login/champ_season_player/seasonList')

            ->with("crmtable", $crmtable)
            ->with("groupage", $groupage)

            ->with("nameroute", $nameroute);


    }


    // Абонементы


    public function index_abonement() {

        $crmtable = DB::table('abonement')->orderBy('id', 'DESC')->get();

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')

            ->get();

        $tarifflist = DB::table('tariff')->orderBy('id', 'DESC')->get();

        $nameroute = "Абонементы ";
        return view('login/abonement/abonementList')

            ->with("clublist", $clublist)
            ->with("tarifflist", $tarifflist)
            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }





    public function index_request() {

        $crmtable = DB::table('request')->orderBy('id', 'DESC')->get();

        $nameroute = "Список заявок с сайта";
        return view('login/crm/request')
            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);

    }


    public function index_clients_camp() {

        $crmtable = DB::table('crm_status_camp')->get();

        $nameroute = "Список клиентов лагеря";
        return view('login/crm/clientscamp')
            ->with("crmtable", $crmtable)
            ->with("nameroute", $nameroute);


    }


    public function index_query() {

      $allcoachs = DB::table('coach')
          ->join('users', 'coach.user_id', '=', 'users.id')
          ->select('users.surname', 'users.name', 'users.photo', 'coach.seniority', 'coach.id')
          ->get();
      $nameroute = "Заявки в работе";
      return view('login/crm/query')
        ->with("allcoachs", $allcoachs)
        ->with("nameroute", $nameroute);

    }

    public function insertNewData(Request $data) {

      $phone = preg_replace('![^0-9]+!', '', $data['phone']);
      if ($data['add_phone'] != "") {
        $addphone = preg_replace('![^0-9]+!', '', $data['add_phone']);
      } else {
        $addphone = "";
      }
      $parentid = DB::table('users')
        ->select('users.id')
        ->where('users.phone_number', '=', $phone)
        ->first();



      if (!isset($parentid)) {
        $fi = explode(" ", $data['name']);
        if (isset($fi[1])) {

          DB::table('users')->insert([
            'surname' => $fi[0],
            'name' => $fi[1],
            'phone_number' => $phone,
            'add_phone' => $addphone,
            'created_at' => date("Y-m-d H:i:s"),
            'channel_join' => $data['info'],
          ]);

        } else {

          DB::table('users')->insert([
            'name' => $data['name'],
            'phone_number' => $phone,
            'add_phone' => $addphone,
            'created_at' => date("Y-m-d H:i:s"),
            'channel_join' => $data['info'],
          ]);

        }
        $parentid = DB::table('users')
          ->select('users.id')
          ->where('users.phone_number', '=', $phone)
          ->first();
      }

      $fi = explode(" ", $data['name_kid']);
      $datebirth = date("Y-m-d", strtotime($data['date-birth-kid']));

      if (isset($fi[1])) {

        $kidsid = DB::table('kids')
          ->select('kids.id_kid')
          ->where('kids.parent_id', '=', $parentid->id)
          ->where('kids.surname_kid', '=', $fi[0])
          ->where('kids.name_kid', '=', $fi[1])
          ->where('kids.date_birth_kid', '=', $datebirth)
          ->first();

      } else {

        $kidsid = DB::table('kids')
          ->select('kids.id_kid')
          ->where('kids.parent_id', '=', $parentid->id)
          ->where('kids.name_kid', '=', $data['name_kid'])
          ->where('kids.date_birth_kid', '=', $datebirth)
          ->first();

      }

      $kidsid = DB::table('kids')
        ->select('kids.id_kid')
        ->where('kids.parent_id', '=', $parentid->id)
        ->where('kids.surname_kid', '=', $fi[0])
        ->where('kids.name_kid', '=', $fi[1])
        ->where('kids.date_birth_kid', '=', $datebirth)
        ->first();

      if (!isset($kidsid)) {
        if (isset($fi[1])) {

          DB::table('kids')->insert([
            'parent_id' => $parentid->id,
            'surname_kid' => $fi[0],
            'name_kid' => $fi[1],
            'date_birth_kid' => $datebirth,
          ]);

        } else {

          DB::table('kids')->insert([
            'parent_id' => $parentid->id,
            'name_kid' => $data['name_kid'],
            'date_birth_kid' => $datebirth,
          ]);

        }

        $kidsid = DB::table('kids')
          ->select('kids.id_kid')
          ->where('kids.parent_id', '=', $parentid->id)
          ->where('kids.surname_kid', '=', $fi[0])
          ->where('kids.name_kid', '=', $fi[1])
          ->where('kids.date_birth_kid', '=', $datebirth)
          ->first();
      }

      $crmid = DB::table('crm_status')
        ->select('crm_status.id_crm')
        ->where('crm_status.user_id', '=', $parentid->id)
        ->where('crm_status.kid_id', '=', $kidsid->id_kid)
        ->first();

      if (!isset($crmid)) {

        DB::table('crm_status')->insert([
          'user_id' => $parentid->id,
          'kid_id' => $kidsid->id_kid,
          'entry_point' => 3,
          'club_id' => $data['club'],
          'date_create' => date("Y-m-d H:i:s"),
          'datetime_nextcall' => date("Y-m-d H:i:s", strtotime($data['datetime-nextcall']) + 300),
          'comment' => $data['comment'],
          'status' => $data['status'],
        ]);

      }

      return redirect()->route('clients');

    }

    public function updateitem(Request $data){

      if ($data['whatsapp'] == "true") {
        $wu_st = 1;
      } else {
        $wu_st = 0;
      }

      DB::table('crm_status')
        ->where('id_crm', $data['id'])
        ->update([
          'club_id' => $data['club'],
          'comment' => $data['comment'],
          'datetime_nextcall' => date("Y-m-d H:i:s", strtotime($data['calltime'])),
          'status' => $data['status'],
          'whatsapp_channel' => $wu_st,
        ]);

    }

    public function changeUsersData(Request $data, $id){
      $phone = preg_replace('![^0-9]+!', '', $data['phone']);
      $addphone = preg_replace('![^0-9]+!', '', $data['add_phone']);

      $fi = explode(" ", $data['name']);
      if (isset($fi[1])) {
        DB::table('users')->where('id', '=', $id)->update([
          'surname' => $fi[0],
          'name' => $fi[1],
          'phone_number' => $phone,
          'add_phone' => $addphone,
          'channel_join' => $data['info'],
        ]);
      } else {
        DB::table('users')->where('id', '=', $id)->update([
          'name' => $data['name'],
          'phone_number' => $phone,
          'add_phone' => $addphone,
          'channel_join' => $data['info'],
        ]);
      }

      return $this->getUsersData($data, $id);

    }

    public function getUsersData(Request $d){

      $userdata = DB::table('users')->where('id', '=', $d['id'])->first();

      $data[0] = $userdata->id;
      $data[1] = $userdata->surname;
      $data[2] = $userdata->name;
      $data[3] = $userdata->phone_number;
      $data[4] = $userdata->channel_join;
      $data[5] = $userdata->add_phone;

      return $data;

    }

    public function changeKidData(Request $data, $id){

      $fi = explode(" ", $data['name']);
      $datebirth = date("Y-m-d", strtotime($data['date-birth-kid']));

      if (isset($fi[1])) {
        DB::table('kids')->where('id_kid', '=', $id)->update([
          'surname_kid' => $fi[0],
          'name_kid' => $fi[1],
          'date_birth_kid' => $datebirth,
          'amplua_kid' => $data['amplua'],
          'level_kid' => $data['level'],
        ]);
      } else {
        DB::table('kids')->where('id_kid', '=', $id)->update([
          'name_kid' => $data['name'],
          'date_birth_kid' => $datebirth,
          'amplua_kid' => $data['amplua'],
          'level_kid' => $data['level'],
        ]);
      }



      return $this->getKidData($data, $id);

    }

    public function getKidData(Request $d){

      $kiddata = DB::table('kids')
        ->select('kids.*', 'users.surname', 'users.name', 'users.phone_number')
        ->join('users', 'users.id', '=', 'kids.parent_id')
        ->where('id_kid', '=', $d['id'])
        ->first();

      $data = (array) $kiddata;

      return $data;

    }

    public function updateitem_camp(Request $data) {

      DB::table('crm_status_camp')
        ->where('id_crm_camp', $data['id'])
        ->update([
          'location' => $data['club'],
          'comment' => $data['comment'],
          'datetime_nextcall' => date("Y-m-d H:i:s", strtotime($data['calltime'])),
          'status' => $data['status'],
          'height' => $data['height'],
        ]);

    }

    public function insertNewData_camp(Request $data) {

      DB::table('crm_status_camp')->insert([
        'user_name' => $data['name'],
        'user_phone' => preg_replace('![^0-9]+!', '', $data['phone']),
        'kid_name' => $data['name_kid'],
        'kid_datebirth' => date("Y-m-d", strtotime($data['date-birth-kid'])),
        'entry_point' => 2,
        'location' => $data['location'].$data['time'],
        'date_create' => date("Y-m-d H:i:s"),
        'datetime_nextcall' => date("Y-m-d H:i:s", strtotime($data['datetime-nextcall'])),
        'comment' => $data['comment'],
        'status' => $data['status'],
      ]);

      return redirect()->route('clients_camp');

    }

}
