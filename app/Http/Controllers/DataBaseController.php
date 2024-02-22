<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Abonement;
use App\Models\Club;
use App\Models\Coach;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use View;
use Intervention\Image\Facades\Image;

class DataBaseController extends Controller
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

    public function findCoachOnPhone(Request $data)
    {
        $user = DB::table('users')->where('phone_number', $data['phone'])->first();
        if (empty($user) != True) {
            if (empty($user->date_birth) == True) {
                $date_site = "дата рождения не указана";
            } else {
                $date = explode("-", $user->date_birth);
                $date_site = $date[2] . '.' . $date[1] . '.' . $date[0];
            }
            $result = $user->surname . " " . $user->name . " " . $user->secondname . " (" . $date_site . ")";
        } else {
            $result = "False";
        }

        return $result;
    }

    public function index_coach()
    {
        $allcoachs = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.surname', 'users.name', 'users.photo', 'coach.seniority', 'coach.id')
            ->get();
        $nameroute = "Список тренеров";
        return view('login/coach/coachList')
            ->with("allcoachs", $allcoachs)
            ->with("nameroute", $nameroute);
    }

    /*
    public function createNewCoach(Request $data)
    {
        if ($data->isMethod('POST')) {
            $findId = DB::table('users')->where('phone_number', $data['phone'])->value('id');
            DB::table('coach')->insert([
                'user_id' => $findId,
                'availability' => "0000000"
            ]);
            return redirect()->route('coachList');
        }
    }
    */

    public function coachEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {


            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if (isset($data['display-front-camp']) == True) {
                $display_camp = True;
            } else {
                $display_camp = False;
            }

            $avail = "";
            for ($i = 1; $i < 8; $i++) {
                if (isset($data['d' . $i]) == True) {
                    $avail = $avail . '1';
                } else {
                    $avail = $avail . '0';
                }
            }

            $coachNorm = Coach::query()->where("id", $id)->first();

            $clubIds = $data->input("club_ids");
            if ($clubIds) {
                 $coachNorm->clubs()->sync($clubIds);
            } else {
                 $coachNorm->clubs()->detach();
            }

            DB::table('coach')
                ->where('id', $id)
                ->update([
                    'education' => $data['education'],
                    'license' => $data['license'],
                    'career' => $data['career'],
                    'cloth_size' => $data['cloth_size'],
                    'marital_status' => $data['marital-st'],
                    'career_football' => $data['career_football'] ?? null,
                    'career_trainer' => $data['career_trainer'] ?? null,
                    'achievements' => $data['achievements'] ?? null,
                    'kids' => $data['kids'],
                    'seniority' => $data['seniority'],
                    'display_front' => $display,
                    'display_front_camp' => $display_camp,
                    'pages' => implode(',', $data->input('pages', [])),
                    'availability' => $avail
                ]);
            $coach = DB::table('coach')
                ->where('coach.id', $id)
                ->first();
            if ($data['date-birth'] != "") {
                $date = explode(".", $data['date-birth']);
                $date_sql = $date[2] . '-' . $date[1] . '-' . $date[0];
                DB::table('users')
                    ->where('id', $coach->user_id)
                    ->update([
                        'date_birth' => $date_sql,
                    ]);
            }
            DB::table('users')
                ->where('id', $coach->user_id)
                ->update([
                    'surname' => $data['surname'],
                    'name' => $data['name'],
                    'secondname' => $data['secondname'],
                    'social_vk' => $data['social-vk'],
                    'social_inst' => $data['social-inst'],
                    'social_fb' => $data['social-fb'],
                    'phone_number' => $data['phone_number'],
                    'location' => $data['location'],
                    'email' => $data['email'],
                    'sex' => $data['sex'],
                ]);

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/users/photo');
                DB::table('users')
                    ->where('id', $coach->user_id)
                    ->update([
                        'photo' => $path_image
                    ]);
            }
/*
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/users/' . $id . '/photo');
                DB::table('users')
                    ->where('id', $coach->user_id)
                    ->update([
                        'photo' => $path_image,
                    ]);
            }
*/
            return redirect()->route('coachList');
        } else if ($data->isMethod("GET")) {
            return $this->index_coachEdit($id);
        }
    }

    public function index_coachEdit($id)
    {
        $coach = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->where('coach.id', $id)
            ->select('users.*', 'coach.*')
            ->first();
        $arrday = str_split($coach->availability);
        if ($coach->date_birth != "") {
            $arr = explode("-", $coach->date_birth);
            $date = $arr[2] . '.' . $arr[1] . '.' . $arr[0];
        } else {
            $date = "";
        }

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $coachNorm = Coach::query()->where("id", $id)->first();

        $nameroute = "Редактирование тренера: " . $coach->surname . " " . $coach->name;
        return view('login/coach/coachEdit')
            ->with('date', $date)
            ->with('coach', $coach)
            ->with('arrday', $arrday)
            ->with('clublist', $clublist)
            ->with('coachNorm', $coachNorm)
            ->with("nameroute", $nameroute);
    }

    public function coachDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('coach')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('coachList');

    }

    public function index_area()
    {
        $allarea = DB::table('area')->get();
        $nameroute = "Список площадок";
        return view('login/area/areaList')
            ->with("allarea", $allarea)
            ->with("nameroute", $nameroute);
    }

    public function createNewArea(Request $data)
    {
        if ($data->isMethod('POST')) {
            $avail = "";
            for ($i = 1; $i < 8; $i++) {
                if (isset($data['d' . $i]) == True) {
                    $avail = $avail . '1';
                } else {
                    $avail = $avail . '0';
                }
            }
            $option = "";
            for ($i = 1; $i < 10; $i++) {
                if (isset($data['o' . $i]) == True) {
                    $option = $option . '1';
                } else {
                    $option = $option . '0';
                }
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/area/photo');
                DB::table('area')->insert([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'adress' => $data['adress'],
                    'size' => $data['size'],
                    'cover' => $data['cover'],
                    'capacity' => $data['capacity'],
                    'rent' => $data['rent'],
                    'name_admin' => $data['name_admin'],
                    'email_admin' => $data['email_admin'],
                    'phone_admin' => $data['phone_admin'],
                    'id_manager' => $data['id_manager'],
                    'geo_mark' => $data['geo_mark'],
                    'photo' => $path_image,
                    'schedule' => $avail,
                    'options' => $option

                ]);
            } else {
                DB::table('area')->insert([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'adress' => $data['adress'],
                    'size' => $data['size'],
                    'cover' => $data['cover'],
                    'capacity' => $data['capacity'],
                    'rent' => $data['rent'],
                    'name_admin' => $data['name_admin'],
                    'email_admin' => $data['email_admin'],
                    'phone_admin' => $data['phone_admin'],
                    'id_manager' => $data['id_manager'],
                    'geo_mark' => $data['geo_mark'],
                    'schedule' => $avail,
                    'options' => $option
                ]);
            }
            return redirect()->route('areaList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_areaNew();
        }
    }

    public function areaEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            $avail = "";
            for ($i = 1; $i < 8; $i++) {
                if (isset($data['d' . $i]) == True) {
                    $avail = $avail . '1';
                } else {
                    $avail = $avail . '0';
                }
            }
            $option = "";
            for ($i = 1; $i < 10; $i++) {
                if (isset($data['o' . $i]) == True) {
                    $option = $option . '1';
                } else {
                    $option = $option . '0';
                }
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/area/photo');
                DB::table('area')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'description' => $data['description'],
                        'adress' => $data['adress'],
                        'size' => $data['size'],
                        'cover' => $data['cover'],
                        'capacity' => $data['capacity'],
                        'rent' => $data['rent'],
                        'name_admin' => $data['name_admin'],
                        'email_admin' => $data['email_admin'],
                        'phone_admin' => $data['phone_admin'],
                        'id_manager' => $data['id_manager'],
                        'geo_mark' => $data['geo_mark'],
                        'photo' => $path_image,
                        'schedule' => $avail,
                        'options' => $option
                    ]);
            } else {
                DB::table('area')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'description' => $data['description'],
                        'adress' => $data['adress'],
                        'size' => $data['size'],
                        'cover' => $data['cover'],
                        'capacity' => $data['capacity'],
                        'rent' => $data['rent'],
                        'name_admin' => $data['name_admin'],
                        'email_admin' => $data['email_admin'],
                        'phone_admin' => $data['phone_admin'],
                        'id_manager' => $data['id_manager'],
                        'geo_mark' => $data['geo_mark'],
                        'schedule' => $avail,
                        'options' => $option
                    ]);
            }
            return redirect()->route('areaList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_areaEdit($id);
        }
    }

    public function areaDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('area')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('areaList');

    }



    public function index_areaNew()
    {
        $nameroute = "Создание новой площадки";
        return view('login/area/areaNew')
            ->with("nameroute", $nameroute);
    }

    public function index_areaEdit($id)
    {
        $area = DB::table('area')
            ->where('area.id', $id)
            ->first();
        $arrday = str_split($area->schedule);
        $arroption = str_split($area->options);
        $nameroute = "Редактирование площадки: " . $area->name;
        return view('login/area/areaEdit')
            ->with("nameroute", $nameroute)
            ->with('area', $area)
            ->with('arrday', $arrday)
            ->with('arroption', $arroption);
    }


    public function index_scheduleNew()
    {
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $groupage  = DB::table('group_age')
            ->get();

        $grouplist = DB::table('group_section')
            ->get();


        $nameroute = "Создание нового расписания";
        return view('login/schedule/scheduleNew')
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)

            ->with("grouplist", $grouplist)

            ->with("nameroute", $nameroute);
    }



    public function createNewSchedule(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('training_schedule')->insert([
                'club_id' => $data['club_id'],
                'group_age_id' => $data['group_age_id'],
                'group_section_id' => $data['group_section_id'],
                'monday_start' => $data['monday_start'],
                'monday_end' => $data['monday_end'],
                'tuesday_start' => $data['tuesday_start'],
                'tuesday_end' => $data['tuesday_end'],
                'wednesday_start' => $data['wednesday_start'],
                'wednesday_end' => $data['wednesday_end'],
                'thursday_start' => $data['thursday_start'],
                'thursday_end' => $data['thursday_end'],
                'friday_start' => $data['friday_start'],
                'friday_end' => $data['friday_end'],
                'saturday_start' => $data['saturday_start'],
                'saturday_end' => $data['saturday_end'],
                'sunday_start' => $data['sunday_start'],
                'sunday_end' => $data['sunday_end'],

            ]);

            return redirect()->route('schedule');

        }

            if ($data->isMethod('GET')) {
            return $this->index_scheduleNew();
        }
    }





    // Лагери  schoolball.ru/catalog
    // Создание записи
    public function index_catcampNew()
    {



        $nameroute = "Создание нового лагеря";
        return view('login/catcamp/catcampNew')

            ->with("nameroute", $nameroute);
    }



     public function createNewCatcamp(Request $data)
    {

        if ($data->isMethod('POST')) {

            if (isset($data['is_summer']) == True) {
                $is_summer = True;
            } else {
                $is_summer = False;
            }

            if (isset($data['display-front'])) {
                $display = true;
            } else {
                $display = false;
            }


            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/catalog');
            }else {
                $path_image = '';

            }

            DB::table('catalog_camp')->insert([
                'name' => $data['name'],
                'date_from' => $data['date_from'],
                'date_to' => $data['date_to'],
                'is_summer' => $is_summer,
                'topic' => $data['topic'],
                'location' => $data['location'],
                'free_places' => $data['free_places'],
                'url' => $data['url'],
                'img' => $path_image,
                'type' => $data['type'],
                'display_front' => $display,

            ]);

            return redirect()->route('catcampList');

        }

        if ($data->isMethod('GET')) {
            return $this->index_catcampNew();
        }
    }

    // Редактирование

    public function catcampEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            $camp = DB::table('catalog_camp')->where('id', $id)->first();

            if (isset($data['is_summer']) == True) {
                $is_summer = True;
            } else {
                $is_summer = False;
            }

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/catalog');
            }


                if ($data->has('img')) {
                    $path_image = $data->file('img')->store('public/doc/club/catalog');
                    Storage::delete($camp->img);
                } else {
                    $path_image = $camp->img;
                }


            DB::table('catalog_camp')
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],
                    'date_from' => $data['date_from'],
                    'date_to' => $data['date_to'],
                    'is_summer' => $is_summer,
                    'topic' => $data['topic'],
                    'location' => $data['location'],
                    'free_places' => $data['free_places'],
                    'url' => $data['url'],
                    'img' => $path_image,
                    'type' => $data['type'],
                    'display_front' => $display,
                ]);


            return redirect()->route('catcampList');
        } else if ($data->isMethod("GET")) {
            return $this->index_catcampEdit($id);
        }
    }

    public function index_catcampEdit($id)
    {


        $camp = DB::table('catalog_camp')
            ->where('id', $id)
            ->first();


        $nameroute = "Редактирование лагеря ";
        return view('login/catcamp/catcampEdit')

            ->with("camp", $camp)
            ->with("nameroute", $nameroute);

    }

    // Удаление
    public function catcampDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('catalog_camp')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('catcampList');

    }


    // Блок программ  schoolball.ru/catalog
    // Создание записи
    public function index_programNew()
    {


        $nameroute = "Создание новой программы";
        return view('login/program/programNew')

            ->with("nameroute", $nameroute);
    }

    public function createNewProgram(Request $data)
    {

        if ($data->isMethod('POST')) {

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/program');
            }else {
                $path_image = '';
            }


            if ($data->has('program')) {
                $path_program = $data->file('program')->store('public/doc/club/program_pdf');
            }else {
                $path_program = '';
            }


            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }


            DB::table('catalog_program')->insert([
                'topic' => $data['topic'],
                'skills' => $data['skills'],
                'skills_count' => $data['skills_count'],
                'knowledge' => $data['knowledge'],
                'knowledge_count' => $data['knowledge_count'],
                'emotions' => $data['emotions'],
                'emotions_count' => $data['emotions_count'],
                'img' => $path_image,
                'program' => $path_program,
                'page' => $data['page'],
                'smena1' => $data['smena1'],
                'smena2' => $data['smena2'],
                'smena3' => $data['smena3'],
                'smena4' => $data['smena4'],
                'display_front' => $display,


            ]);

            return redirect()->route('programList');

        }

        if ($data->isMethod('GET')) {
            return $this->index_programNew();
        }
    }

    // Редактирование

    public function programEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            $camp = DB::table('catalog_program')->where('id', $id)->first();

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/program');
            }


            if ($data->has('program')) {
                $path_program = $data->file('program')->store('public/doc/club/program_pdf');
                Storage::delete($camp->program);
            } else {
                $path_program = $camp->program;
            }


            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/program');
                Storage::delete($camp->img);
            } else {
                $path_image = $camp->img;
            }


            DB::table('catalog_program')
                ->where('id', $id)
                ->update([
                    'topic' => $data['topic'],
                    'skills' => $data['skills'],
                    'skills_count' => $data['skills_count'],
                    'knowledge' => $data['knowledge'],
                    'knowledge_count' => $data['knowledge_count'],
                    'emotions' => $data['emotions'],
                    'emotions_count' => $data['emotions_count'],
                    'page' => $data['page'],

                    'img' => $path_image,
                    'program' => $path_program,
                    'smena1' => $data['smena1'],
                    'smena2' => $data['smena2'],
                    'smena3' => $data['smena3'],
                    'smena4' => $data['smena4'],
                    'display_front' => $display

                ]);


            return redirect()->route('programList');
        } else if ($data->isMethod("GET")) {
            return $this->index_programEdit($id);
        }
    }

    public function index_programEdit($id)
    {

        $program = DB::table('catalog_program')
            ->where('id', $id)
            ->first();

        $nameroute = "Редактирование лагеря ";
        return view('login/program/programEdit')

            ->with("program", $program)
            ->with("nameroute", $nameroute);

    }


    // Дублирование карточки программы

    public function duplicateProgram(Request $request, $id)
    {
        $originalProgram = DB::table('catalog_program')->where('id', $id)->first();

        if ($originalProgram) {
            $newProgram = clone $originalProgram;
            $newProgram->id = null;
            $newProgram->topic = $originalProgram->topic . ' (Копия)';
            DB::table('catalog_program')->insert((array) $newProgram);

            return redirect()->route('programList')->with('success', 'Программа успешно дублирована');
        } else {
            return redirect()->route('programList')->with('error', 'Программа не найдена');
        }
    }


    // Удаление
    public function programDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('catalog_program')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('programList');

    }


    // Создание тарифов на главной


    public function index_tarifflistNew()
    {
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $groupage  = DB::table('group_age')
            ->get();



        $nameroute = "Создание нового расписания";
        return view('login/tarifflist/tarifflistNew')
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)

            ->with("nameroute", $nameroute);
    }



    public function createNewTarifflist(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('tariffs_site')->insert([
                'club_id' => $data['club_id'],
                'group_id' => $data['group_id'],
                'name' => $data['name'],
                'classes' => $data['classes'],
                'select_date' => $data['select_date'],
                'freezing' => $data['freezing'],
                'price' => $data['price'],
                'gift' => $data['gift'],
                'popular_badge' => $data['popular_badge'],
                'default_public' => $data['default_public'],

                'rescheduling_classes' => $data['rescheduling_classes'],
                'discount' => $data['discount'],
                'included_diary' => $data['included_diary'],
                'included_form_discount' => $data['included_form_discount'],
            ]);

            return redirect()->route('tarifflist');

        }

        if ($data->isMethod('GET')) {
            return $this->index_tarifflistNew();
        }
    }






    public function index_scheduleweekendNew()
    {



        $nameroute = "Создание нового расписания";
        return view('login/schedule_weekend/scheduleweekendNew')


            ->with("nameroute", $nameroute);
    }





    public function createScheduleweekend(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('schedule_wekeends')->insert([
                'day' => $data['day'],
                'time' => $data['time'],
                'activity' => $data['activity'],


            ]);

            return redirect()->route('scheduleweekend');

        }

        if ($data->isMethod('GET')) {
            return $this->index_scheduleweekendNew();
        }
    }


    public function scheduleweekendEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {



            DB::table('schedule_wekeends')
                ->where('id', $id)
                ->update([
                    'day' => $data['day'],
                    'time' => $data['time'],
                    'activity' => $data['activity'],

                ]);



            return redirect()->route('scheduleweekend');
        } else if ($data->isMethod("GET")) {
            return $this->index_scheduleweekendEdit($id);
        }
    }

    public function index_scheduleweekendEdit($id)
    {


        $schedule = DB::table('schedule_wekeends')
            ->where('id', $id)
            ->first();



        $nameroute = "Редактирование записи: ";
        return view('login/schedule_weekend/scheduleweekendEdit')

            ->with("schedule", $schedule)
            ->with("nameroute", $nameroute);

    }

    public function scheduleweekendDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('schedule_wekeends')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('scheduleweekend');

    }



    public function tarifflistEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {



            DB::table('tariffs_site')
                ->where('id', $id)
                ->update([
                    'club_id' => $data['club_id'],
                    'group_id' => $data['group_id'],
                    'name' => $data['name'],
                    'classes' => $data['classes'],
                    'select_date' => $data['select_date'],
                    'freezing' => $data['freezing'],
                    'price' => $data['price'],
                    'gift' => $data['gift'],
                    'popular_badge' => $data['popular_badge'],
                    'default_public' => $data['default_public'],

                    'rescheduling_classes' => $data['rescheduling_classes'],
                    'discount' => $data['discount'],
                    'included_diary' => $data['included_diary'],
                    'included_form_discount' => $data['included_form_discount'],
                ]);



            return redirect()->route('tarifflist');
        } else if ($data->isMethod("GET")) {
            return $this->index_tarifflistEdit($id);
        }
    }

    public function index_tarifflistEdit($id)
    {
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $tariff = DB::table('tariffs_site')
            ->where('id', $id)
            ->first();

        $groupage  = DB::table('group_age')
            ->get();



        $nameroute = "Редактирование тарифа: ";
        return view('login/tarifflist/tarifflistEdit')
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)
            ->with("tariff", $tariff)
            ->with("nameroute", $nameroute);

    }

    public function tarifflistDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('tariffs_site')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('tarifflist');

    }






    //  Создание новых тарифов


    public function index_tariffNew()
    {


        $nameroute = "Создание нового тарифа";
        return view('login/tariff/tariffNew')


            ->with("nameroute", $nameroute);
    }


    public function createNewTariff(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('abonement')->insert([
                'name' => $data['name'],
                'cost' => $data['cost'],
                'included' => $data['included'],
                'is_transfer' => isset($data['is_transfer']),
                'is_favorite' => isset($data['is_favorite']),
                'profit' => $data['profit'],
                'cost_one_training' => $data['cost_one_training'],
            ]);

            return redirect()->route('tariff');

        }

        if ($data->isMethod('GET')) {
            return $this->index_tariffNew();
        }
    }



    public function tariffEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {
            DB::table('abonement')
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],
                    'cost' => $data['cost'],
                    'included' => $data['included'],
                    'is_transfer' => isset($data['is_transfer']),
                    'is_favorite' => isset($data['is_favorite']),
                    'profit' => $data['profit'],
                    'cost_one_training' => $data['cost_one_training'],
                ]);

            return redirect()->route('tariff');
        } else if ($data->isMethod("GET")) {
            return $this->index_tariffEdit($id);
        }
    }

    public function index_tariffEdit($id)
    {


        $tariff = DB::table('abonement')
            ->where('id', $id)
            ->first();


        $nameroute = "Редактирование тарифа ";
        return view('login/tariff/tariffEdit')

            ->with("tariff", $tariff)
            ->with("nameroute", $nameroute);

    }

    public function tariffDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('abonement')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('tariff');

    }


    // Абонементы



    public function index_abonementNew()
    {

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')

            ->get();

        $tarifflist = DB::table('abonement')->orderBy('id', 'DESC')->get();

        $nameroute = "Создание нового тарифа";
        return view('login/abonement/abonementNew')

            ->with("clublist", $clublist)
            ->with("tarifflist", $tarifflist)
            ->with("nameroute", $nameroute);
    }




    // Сезон




    public function index_calendarNew()
    {

        $nameroute = "Создание новой записи";
        return view('login/champ_calendar/calendarNew')

            ->with("nameroute", $nameroute);
    }



    public function index_seasonPlayerNew()
    {
        $groupage  = DB::table('group_age_championship')
            ->get();

        $nameroute = "Создание новой записи";
        return view('login/champ_season_player/seasonNew')

            ->with("groupage", $groupage)
            ->with("nameroute", $nameroute);
    }
    public function createNewSeasonPlayer(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('champioship_player_season')->insert([

             'player_name' => $data['player_name'],

                'team_name' => $data['team_name'],
                'group_age_id' => $data['group_age_id'],
                'points' => $data['points'],
            ]);

            return redirect()->route('season_player');

        }

        if ($data->isMethod('GET')) {
            return $this->index_seasonPlayerNew();
        }
    }

    public function seasonPlayerEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            DB::table('champioship_player_season')
                ->where('id', $id)
                ->update([
                    'player_name' => $data['player_name'],

                    'team_name' => $data['team_name'],
                    'group_age_id' => $data['group_age_id'],
                    'points' => $data['points'],

                ]);

            return redirect()->route('season_player');
        } else if ($data->isMethod("GET")) {
            return $this->index_seasonPlayerEdit($id);
        }
    }

    public function index_seasonPlayerEdit($id)
    {

        $season = DB::table('champioship_player_season')
            ->where('id', $id)
            ->first();
        $groupage  = DB::table('group_age_championship')
            ->get();
        $nameroute = "Редактирование записи ";
        return view('login/champ_season_player/seasonEdit')
            ->with("groupage", $groupage)

            ->with("season", $season)
            ->with("nameroute", $nameroute);

    }

    public function seasonPlayerDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('champioship_season')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('season_player');

    }





    public function index_seasonNew()
    {
        $groupage  = DB::table('group_age_championship')
            ->get();

        $nameroute = "Создание новой записи";
        return view('login/champ_season/seasonNew')

            ->with("groupage", $groupage)
            ->with("nameroute", $nameroute);
    }
    public function createNewSeason(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('champioship_season')->insert([
                'team_name' => $data['team_name'],
                'group_age_id' => $data['group_age_id'],
                'points' => $data['points'],
            ]);

            return redirect()->route('season');

        }

        if ($data->isMethod('GET')) {
            return $this->index_seasonNew();
        }
    }

    public function seasonEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            DB::table('champioship_season')
                ->where('id', $id)
                ->update([
                    'team_name' => $data['team_name'],
                    'group_age_id' => $data['group_age_id'],
                    'points' => $data['points'],

                ]);

            return redirect()->route('season');
        } else if ($data->isMethod("GET")) {
            return $this->index_seasonEdit($id);
        }
    }

    public function index_seasonEdit($id)
    {

        $season = DB::table('champioship_season')
            ->where('id', $id)
            ->first();
        $groupage  = DB::table('group_age_championship')
            ->get();
        $nameroute = "Редактирование записи ";
        return view('login/champ_season/seasonEdit')
            ->with("groupage", $groupage)

            ->with("season", $season)
            ->with("nameroute", $nameroute);

    }

    public function seasonDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('champioship_season')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('season');

    }

    // Календарь событий

    // Сезон

    public function createNewCalendar(Request $data)
    {

        if ($data->isMethod('POST')) {

            if ($data->has('image')) {
                $path_image = $data->file('image')->store('public/doc/championship/image');
            }else {
                $path_image = '';

            }

            DB::table('champioship_calendar')->insert([
                'date' => $data['date'],
                'season' => $data['season'],
                'subname' => $data['subname'],

                'image' =>  $path_image,
                'name' => $data['name'],
            ]);

            return redirect()->route('calendar');

        }

        if ($data->isMethod('GET')) {
            return $this->index_calendarNew();
        }
    }

    public function calendarEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            DB::table('champioship_calendar')
                ->where('id', $id)
                ->update([
                    'date' => $data['date'],
                    'season' => $data['season'],
                    'subname' => $data['subname'],

                    'name' => $data['name'],

                ]);
            $coach = DB::table('champioship_calendar')
                ->where('id', $id)
                ->first();
            if ($data->has('image')) {
                $path_image = $data->file('image')->store('public/doc/championship_image/photo');
                DB::table('champioship_calendar')
                    ->where('id', $id)
                    ->update([
                        'image' => $path_image
                    ]);
            }

            return redirect()->route('calendar');
        } else if ($data->isMethod("GET")) {
            return $this->index_calendarEdit($id);
        }
    }

    public function index_calendarEdit($id)
    {

        $calendar = DB::table('champioship_calendar')
            ->where('id', $id)
            ->first();

        $nameroute = "Редактирование записи ";
        return view('login/champ_calendar/calendarEdit')


            ->with("calendar", $calendar)
            ->with("nameroute", $nameroute);

    }

    public function calendarDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('champioship_calendar')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('calendar');

    }

    public function createNewAbonement(Request $data)
    {

        if ($data->isMethod('POST')) {

            DB::table('abonement')->insert([
                'club_id' => $data['club_id'],
                'tariff_id' => $data['tariff_id'],


            ]);



            return redirect()->route('abonement');

        }

        if ($data->isMethod('GET')) {
            return $this->index_abonementNew();
        }
    }



    public function abonementEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {



            DB::table('abonement')
                ->where('id', $id)
                ->update([
                    'club_id' => $data['club_id'],
                    'tariff_id' => $data['tariff_id'],


                ]);



            return redirect()->route('abonement');
        } else if ($data->isMethod("GET")) {
            return $this->index_abonementEdit($id);
        }
    }

    public function index_abonementEdit($id)
    {

        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')

            ->get();

        $tarifflist = DB::table('abonement')->orderBy('id', 'DESC')->get();


        $abonement = DB::table('abonement')
            ->where('id', $id)
            ->first();

        $nameroute = "Редактирование абонемента ";
        return view('login/abonement/abonementEdit')
            ->with("clublist", $clublist)
            ->with("tarifflist", $tarifflist)

            ->with("abonement", $abonement)
            ->with("nameroute", $nameroute);

    }

    public function abonementDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('abonement')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('abonement');

    }

// Изменение в главной странице (main_index2)

    public function mainindexEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            $images=array();
            if($files=$data->file('images')){
                foreach($files as $file){
                    $name =  $file->store('public/doc/main_index');

                   // $name=$file->getClientOriginalName();
                  //  $file->store('public/doc/main_index');
                 //   $file->move('image',$name);
                    $images[]=$name;
                }

                DB::table('main_index')
                    ->where('id', $id)
                    ->update([
                        'images_traning' => implode("|",$images),
                    ]);
            }

            if ($data->input("index_abonements")) {
                DB::table("options")->updateOrInsert([
                    "key" => "index_abonements"
                ], [
                    "value" => json_encode($data->input("index_abonements")),
                ]);
            }

            return redirect('mainindex/1/edit');
        } else if ($data->isMethod("GET")) {
            return $this->index_mainindexEdit($id);
        }
    }

    public function index_mainindexEdit($id)
    {

        $mainindex = DB::table('main_index')
            ->where('id', $id)
            ->first();

        $index_abonements = DB::table("options")
            ->where("key" , "index_abonements")
            ->first();

        $index_abonements = $index_abonements ? json_decode($index_abonements->value, true) : [];

        $nameroute = "Редактирование главной: ";
        return view('login/mainindex/mainindexEdit')
            ->with("mainindex", $mainindex)
            ->with("index_abonements", $index_abonements)
            ->with('abonements', Abonement::query()->get())

            ->with("nameroute", $nameroute);

    }

    // Изменение в главной - Программа выходных (wekeends)


    public function wekeendsEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {
            $images = array();
            $wekeend = DB::table('wekeends')->where('id', $id)->first();

            if (isset($data['date'])) {
                $date = $data['date'];
            } else {
                $date =  $wekeend->date;
            }

            if (isset($data['places'])) {
                $places = $data['places'];
            } else {
                $places =  $wekeend->places;
            }


            if (isset($data['sec1'])) {
                $sec1 = $data['sec1'];
            } else {
                $sec1 =  $wekeend->sec1;
            }

            if (isset($data['subname_page'])) {
                $subname_page = $data['subname_page'];
            } else {
                $subname_page =  $wekeend->subname_page;
            }


            if (isset($data['sec2'])) {
                $sec2 = $data['sec2'];
            } else {
                $sec2 =  $wekeend->sec2;
            }


            if (isset($data['sec3'])) {
                $sec3 = $data['sec3'];
            } else {
                $sec3 =  $wekeend->sec3;
            }


            if (isset($data['sec4'])) {
                $sec4 = $data['sec4'];
            } else {
                $sec4 =  $wekeend->sec4;
            }

            if (isset($data['block2_theme'])) {
                $block2_theme = $data['block2_theme'];
            } else {
                $block2_theme =  $wekeend->block2_theme;
            }

            if (isset($data['block2_lesson'])) {
                $block2_lesson = $data['block2_lesson'];
            } else {
                $block2_lesson =  $wekeend->block2_lesson;
            }

            if (isset($data['block2_skill1'])) {
                $block2_skill1 = $data['block2_skill1'];
            } else {
                $block2_skill1 =  $wekeend->block2_skill1;
            }

            if (isset($data['block2_skill2'])) {
                $block2_skill2 = $data['block2_skill2'];
            } else {
                $block2_skill2 =  $wekeend->block2_skill2;
            }

            if (isset($data['block2_skill3'])) {
                $block2_skill3 = $data['block2_skill3'];
            } else {
                $block2_skill3 =  $wekeend->block2_skill3;
            }

            if (isset($data['price'])) {
                $price = $data['price'];
            } else {
                $price =  $wekeend->price;
            }

            if (isset($data['price_discount'])) {
                $price_discount = $data['price_discount'];
            } else {
                $price_discount =  $wekeend->price_discount;
            }

            if (isset($data['address_text'])) {
                $address_text = $data['address_text'];
            } else {
                $address_text =  $wekeend->address_text;
            }

            if (isset($data['address_url'])) {
                $address_url = $data['address_url'];
            } else {
                $address_url =  $wekeend->address_url;
            }



/*
            $old_images = explode("|", $wekeend->images_traning);
            if ($files = $data->file('images')) {
                foreach ($files as $file) {
                    $name = $file->store('public/doc/main_index_wekeends');
                    $images[] = $name;
                }
            }
            $images = array_merge($old_images, $images);
            if ($data->has('delete_image')) {
                $delete_image = $data->input('delete_image');
                $images = array_filter($images, function ($img) use ($delete_image) {
                    return $img !== $delete_image;
                });
                Storage::delete($delete_image);
            }
*/

            DB::table('wekeends')
                ->where('id', $id)
                ->update([
                 //   'images_traning' => implode("|", $images),
                    'date' => $date,
                    'places' => $places,
                    'sec1' => $sec1,
                    'sec2' => $sec2,
                    'sec3' => $sec3,
                    'sec4' => $sec4,
                    'subname_page' => $subname_page,
                    'block2_theme' => $block2_theme,
                    'block2_lesson' => $block2_lesson,
                    'block2_skill1' => $block2_skill1,
                    'block2_skill2' => $block2_skill2,
                    'block2_skill3' => $block2_skill3,
                    'price' => $price,
                    'price_discount' => $price_discount,
                    'address_text' => $address_text,
                    'address_url' => $address_url,


                ]);
            return redirect('wekeends/' . $id . '/edit');
        } else if ($data->isMethod("GET")) {
            return $this->index_wekeendsEdit($id);
        }
    }


    // Стоимость участия

    public function index_priceNew($id)
    {
        $main = $id;
        $nameroute = "Создание нового формата участия";
        return view('login.price.priceNew')
            ->with("main", $main)
            ->with("nameroute", $nameroute);
    }

    public function createPriceNew(Request $data, $id)
    {
        if ($data->isMethod('POST')) {

            if ($data->has('img_front')) {
                $path_image_front = $data->file('img_front')->store('public/camp_price_img');
            }else {
                $path_image_front = '';

            }

            if ($data->has('img_back')) {
                $path_image_back = $data->file('img_back')->store('public/camp_price_img');
            }else {
                $path_image_back = '';

            }

            DB::table('camp_price')->insert([
                'page' => $id,
                'title' => $data['title'],
                'duration' => $data['duration'],
                'desc_front' => $data['desc_front'],
                'desc_back' => $data['desc_back'],
                'price' => $data['price'],
                'img_front' => $path_image_front,
                'img_back' => $path_image_back,

            ]);

            return redirect()->route('index_price', $id);
        }

        if ($data->isMethod('GET')) {
            return $this->index_priceNew($id);
        }
    }


    // Фото униформа

    public function editPhotoUniform(Request $request, $id)
    {
        $mainindex = DB::table('champioship_uniform')
            ->where('id', $id)
            ->first();

        $nameroute = "";

        if ($id == 1) {
            $nameroute = "Редактирование формы: ";
        } elseif ($id == 2) {
            $nameroute = "Редактирование Киевская: ";
        } elseif ($id == 3) {
            $nameroute = "Редактирование Кузьминки: ";
        } elseif ($id == 4) {
            $nameroute = "Редактирование Парк-отель Горизонт: ";
        } elseif ($id == 5) {
            $nameroute = "Редактирование Дмитров Гольф Резорт: ";
        }

        return view('login.photo.photoUniformEdit')
            ->with("mainindex", $mainindex)
            ->with("nameroute", $nameroute);
    }

    public function deletePhotoUniform(Request $request, $id)
    {
        $imageName = $request->input('delete_image');

        // Здесь вы можете добавить логику для удаления изображения из хранилища
        // Например, если вы используете Laravel Storage, можно использовать метод Storage::delete($imageName)

        // Получите текущий список фотографий из базы данных
        $currentImages = DB::table('champioship_uniform')->where('id', $id)->value('images');

        // Разбейте список фотографий на массив
        $imageArray = explode('|', $currentImages);

        // Найдите индекс удаляемого изображения
        $index = array_search($imageName, $imageArray);

        // Удалите изображение из массива
        if ($index !== false) {
            unset($imageArray[$index]);
        }

        // Снова объедините массив в строку с использованием разделителя "|"
        $images = implode('|', $imageArray);

        // Обновите запись в базе данных с новым списком изображений
        DB::table('champioship_uniform')
            ->where('id', $id)
            ->update([
                'images' => !empty($images) ? $images : null
            ]);

        return redirect()->back();
    }

    public function updatePhotoUniform(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            // Загрузите новые изображения и сохраните их в хранилище с изменением размера
            $newImages = '';
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    // Измените размер изображения перед сохранением
                    $resizedImage = Image::make($image)->resize(850, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // Сохраните измененное изображение в хранилище
                    $imageName = $image->hashName();
                    $path = 'public/doc/main_index/' . $imageName;
                    Storage::put($path, (string)$resizedImage->encode());

                    // Добавьте имя сохраненного изображения к новому списку изображений
                    $newImages .= $path;

                    // Добавляем разделитель "|" только если это не последнее изображение
                    if ($index < count($request->file('images')) - 1) {
                        $newImages .= '|';
                    }
                }
            }

            // Получите текущий список фотографий из базы данных
            $currentImages = DB::table('champioship_uniform')->where('id', $id)->value('images');

            // Объедините текущие и новые изображения
            $images = $currentImages;

            if (!empty($currentImages) && !empty($newImages)) {
                $images .= '|' . $newImages;
            } else {
                $images .= $newImages;
            }

            // Обновите запись в базе данных с новым списком изображений
            DB::table('champioship_uniform')
                ->where('id', $id)
                ->update([
                    'images' => $images
                ]);

            return redirect()->back();
        }
    }

    public function editPhoto(Request $request, $id)
    {
        $mainindex = DB::table('wekeends')
            ->where('id', $id)
            ->first();

        $nameroute = "";

        if ($id == 1) {
            $nameroute = "Редактирование главной (Футбольные выходные): ";
        } elseif ($id == 2) {
            $nameroute = "Редактирование Киевская: ";
        } elseif ($id == 3) {
            $nameroute = "Редактирование Кузьминки: ";
        } elseif ($id == 4) {
            $nameroute = "Редактирование Парк-отель Горизонт: ";
        } elseif ($id == 5) {
            $nameroute = "Редактирование Дмитров Гольф Резорт: ";
        }

        return view('login.photo.photoEdit')
            ->with("mainindex", $mainindex)
            ->with("nameroute", $nameroute);
    }

    public function deletePhoto(Request $request, $id)
    {
        $imageName = $request->input('delete_image');

        // Здесь вы можете добавить логику для удаления изображения из хранилища
        // Например, если вы используете Laravel Storage, можно использовать метод Storage::delete($imageName)

        // Получите текущий список фотографий из базы данных
        $currentImages = DB::table('wekeends')->where('id', $id)->value('images_traning');

        // Разбейте список фотографий на массив
        $imageArray = explode('|', $currentImages);

        // Найдите индекс удаляемого изображения
        $index = array_search($imageName, $imageArray);

        // Удалите изображение из массива
        if ($index !== false) {
            unset($imageArray[$index]);
        }

        // Снова объедините массив в строку с использованием разделителя "|"
        $images = implode('|', $imageArray);

        // Обновите запись в базе данных с новым списком изображений
        DB::table('wekeends')
            ->where('id', $id)
            ->update([
                'images_traning' => !empty($images) ? $images : null
            ]);

        return redirect()->back();
    }
    public function updatePhoto(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            // Загрузите новые изображения и сохраните их в хранилище с изменением размера
            $newImages = '';
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    // Измените размер изображения перед сохранением
                    $resizedImage = Image::make($image)->resize(850, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // Сохраните измененное изображение в хранилище
                    $imageName = $image->hashName();
                    $path = 'public/doc/main_index/' . $imageName;
                    Storage::put($path, (string)$resizedImage->encode());

                    // Добавьте имя сохраненного изображения к новому списку изображений
                    $newImages .= $path;

                    // Добавляем разделитель "|" только если это не последнее изображение
                    if ($index < count($request->file('images')) - 1) {
                        $newImages .= '|';
                    }
                }
            }

            // Получите текущий список фотографий из базы данных
            $currentImages = DB::table('wekeends')->where('id', $id)->value('images_traning');

            // Объедините текущие и новые изображения
            $images = $currentImages;

            if (!empty($currentImages) && !empty($newImages)) {
                $images .= '|' . $newImages;
            } else {
                $images .= $newImages;
            }

            // Обновите запись в базе данных с новым списком изображений
            DB::table('wekeends')
                ->where('id', $id)
                ->update([
                    'images_traning' => $images
                ]);

            return redirect()->back();
        }
    }



    public function editPhotoClub(Request $request, $id)
    {
        $mainindex = DB::table('club')
            ->where('id', $id)
            ->first();


            $nameroute = $mainindex->name;

        return view('login.photoClub.photoEdit')
            ->with("mainindex", $mainindex)
            ->with("nameroute", $nameroute);
    }

    public function deletePhotoClub(Request $request, $id)
    {
        $imageName = $request->input('delete_image');

        // Здесь вы можете добавить логику для удаления изображения из хранилища
        // Например, если вы используете Laravel Storage, можно использовать метод Storage::delete($imageName)

        // Получите текущий список фотографий из базы данных
        $currentImages = DB::table('club')->where('id', $id)->value('images');

        // Разбейте список фотографий на массив
        $imageArray = explode('|', $currentImages);

        // Найдите индекс удаляемого изображения
        $index = array_search($imageName, $imageArray);

        // Удалите изображение из массива
        if ($index !== false) {
            unset($imageArray[$index]);
        }

        // Снова объедините массив в строку с использованием разделителя "|"
        $images = implode('|', $imageArray);

        // Обновите запись в базе данных с новым списком изображений
        DB::table('club')
            ->where('id', $id)
            ->update([
                'images' => !empty($images) ? $images : null
            ]);

        return redirect()->back();
    }
    public function updatePhotoClub(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            // Загрузите новые изображения и сохраните их в хранилище с изменением размера
            $newImages = '';
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    // Измените размер изображения перед сохранением
                    $resizedImage = Image::make($image)->resize(850, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // Сохраните измененное изображение в хранилище
                    $imageName = $image->hashName();
                    $path = 'public/doc/main_index/' . $imageName;
                    Storage::put($path, (string)$resizedImage->encode());

                    // Добавьте имя сохраненного изображения к новому списку изображений
                    $newImages .= $path;

                    // Добавляем разделитель "|" только если это не последнее изображение
                    if ($index < count($request->file('images')) - 1) {
                        $newImages .= '|';
                    }
                }
            }

            // Получите текущий список фотографий из базы данных
            $currentImages = DB::table('club')->where('id', $id)->value('images');

            // Объедините текущие и новые изображения
            $images = $currentImages;

            if (!empty($currentImages) && !empty($newImages)) {
                $images .= '|' . $newImages;
            } else {
                $images .= $newImages;
            }

            // Обновите запись в базе данных с новым списком изображений
            DB::table('club')
                ->where('id', $id)
                ->update([
                    'images' => $images
                ]);

            return redirect()->back();
        }
    }


    public function updateOrder(Request $request, $id)
    {
        $indexes = $request->input('indexes');
        $images = DB::table('wekeends')->where('id', $id)->value('images_traning');
        $imagesArray = explode('|', $images);

        // Обновите порядок фотографий на основе полученных индексов
        $sortedImages = [];
        foreach ($imagesArray as $image) {
            $imageIndex = array_search($image, array_keys($indexes));
            $sortedImages[$imageIndex] = $image;
        }
        ksort($sortedImages);
        $images = implode('|', $sortedImages);

        DB::table('wekeends')
            ->where('id', $id)
            ->update([
                'images_traning' => $images
            ]);

        return response()->json(['success' => true]);
    }



    public function editPrice(Request $request, $id)
    {
        $campgrafic = DB::table('camp_price')->where('id', $id)->first();
        $nameroute = "Редактирование формат участия";
        return view('login/price/priceEdit')
            ->with("main", $campgrafic)
            ->with("nameroute", $nameroute);
    }

    public function updatePrice(Request $data, $id)
    {
        $camp_price = DB::table('camp_price')->where('id', $id)->first();

        if ($data->isMethod('POST')) {

            if (isset($data['title'])) {
                $title = $data['title'];
            } else {
                $title =  $camp_price->title;
            }


            if (isset($data['duration'])) {
                $duration = $data['duration'];
            } else {
                $duration =  $camp_price->duration;
            }


            if (isset($data['desc_front'])) {
                $desc_front = $data['desc_front'];
            } else {
                $desc_front =  $camp_price->desc_front;
            }


            if (isset($data['desc_back'])) {
                $desc_back = $data['desc_back'];
            } else {
                $desc_back =  $camp_price->desc_back;
            }

            if (isset($data['price'])) {
                $price = $data['price'];
            } else {
                $price =  $camp_price->price;
            }


            if ($data->has('img_front')) {
                $path_image = $data->file('img_front')->store('public/camp_price_img');
                DB::table('camp_price')
                    ->where('id', $camp_price->id)
                    ->update([
                        'img_front' => $path_image
                    ]);
            }

            if ($data->has('img_back')) {
                $path_image = $data->file('img_back')->store('public/camp_price_img');
                DB::table('camp_price')
                    ->where('id', $camp_price->id)
                    ->update([
                        'img_back' => $path_image
                    ]);
            }

            DB::table('camp_price')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'duration' => $duration,
                    'desc_front' => $desc_front,
                    'desc_back' => $desc_back,
                    'price' => $price,


                ]);
            $id = $data['page'];

            return redirect()->route('index_price', $id);

        }
    }


    public function deletePrice(Request $request, $id)
    {
        $campGrafic = DB::table('camp_price')->where('id', $id)->first();
        $id_page = $campGrafic->page;
        if ($campGrafic) {
            DB::table('camp_price')->where('id', $id)->delete();
            return redirect()->route('index_price', $id_page);
        } else {
            return redirect()->route('index_price', $id_page);
        }
    }





    // Стоимость участия

    public function index_detailsNew($id)
    {
        $main = $id;
        $nameroute = "Создание новой записи";
        return view('login.details.detailsNew')
            ->with("main", $main)
            ->with("nameroute", $nameroute);
    }

    public function createDetailsNew(Request $data, $id)
    {
        if ($data->isMethod('POST')) {

            if ($data->has('img')) {
                $path_image_front = $data->file('img')->store('public/camp_details_img');
            }else {
                $path_image_front = '';

            }



            DB::table('camp_details')->insert([
                'page' => $id,
                'title' => $data['title'],
                'title_tab' => $data['title_tab'],
                'desc' => $data['desc'],

                'img' => $path_image_front,


            ]);

            return redirect()->route('index_details', $id);
        }

        if ($data->isMethod('GET')) {
            return $this->index_detailsNew($id);
        }
    }


    public function editDetails(Request $request, $id)
    {
        $campgrafic = DB::table('camp_details')->where('id', $id)->first();
        $nameroute = "Редактирование";
        return view('login/details/detailsEdit')
            ->with("main", $campgrafic)
            ->with("nameroute", $nameroute);
    }

    public function updateDetails(Request $data, $id)
    {
        $camp_price = DB::table('camp_details')->where('id', $id)->first();

        if ($data->isMethod('POST')) {

            if (isset($data['title'])) {
                $title = $data['title'];
            } else {
                $title =  $camp_price->title;
            }

            if (isset($data['title_tab'])) {
                $title_tab= $data['title_tab'];
            } else {
                $title_tab =  $camp_price->title_tab;
            }



            if (isset($data['desc'])) {
                $desc = $data['desc'];
            } else {
                $desc =  $camp_price->desc;
            }



            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/camp_details_img');
                DB::table('camp_details')
                    ->where('id', $camp_price->id)
                    ->update([
                        'img' => $path_image
                    ]);
            }



            DB::table('camp_details')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'desc' => $desc,
                    'title_tab' => $title_tab,
                ]);
            $id = $data['page'];

            return redirect()->route('index_details', $id);

        }
    }

    public function deleteDetails(Request $request, $id)
    {
        $campGrafic = DB::table('camp_details')->where('id', $id)->first();
        $id_page = $campGrafic->page;
        if ($campGrafic) {
            DB::table('camp_details')->where('id', $id)->delete();
            return redirect()->route('index_details', $id_page);
        } else {
            return redirect()->route('index_details', $id_page);
        }
    }



    public function index_dailyNew($id)
    {
        $main = $id;
        $nameroute = "Создание нового расписания";
        return view('login.daily_schedule.dailyNew')
            ->with("main", $main)
            ->with("nameroute", $nameroute);
    }

    public function createDailyNew(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('daily_schedule')->insert([
                'page' => $id,
                'time' => $data['time'],
                'title' => $data['title'],

            ]);

            return redirect()->route('index_dailyschedule', $id);
        }

        if ($data->isMethod('GET')) {
            return $this->index_dailyNew($id);
        }
    }


    public function editDaily(Request $request, $id)
    {
        $campgrafic = DB::table('daily_schedule')->where('id', $id)->first();
        $nameroute = "Редактирование распорядка дня";
        return view('login/daily_schedule/dailyEdit')
            ->with("main", $campgrafic)
            ->with("nameroute", $nameroute);
    }

    public function updateDaily(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            DB::table('daily_schedule')
                ->where('id', $id)
                ->update([
                    'time' => $request['time'],
                    'title' => $request['title'],

                ]);
            $id = $request['page'];

            return redirect()->route('index_dailyschedule', $id);

        }
    }

    public function deleteDaily(Request $request, $id)
    {
        $campGrafic = DB::table('daily_schedule')->where('id', $id)->first();
        $id_page = $campGrafic->page;
        if ($campGrafic) {
            DB::table('daily_schedule')->where('id', $id)->delete();
            return redirect()->route('index_dailyschedule', $id_page);
        } else {
            return redirect()->route('index_dailyschedule', $id_page);
        }
    }




    // CampGrafic

    public function index_campgraficNew($id)
    {
        $main = $id;
        $nameroute = "Создание нового расписания";
        return view('login.camp_grafic.campgraficNew')
            ->with("main", $main)
            ->with("nameroute", $nameroute);
    }

    public function createCampgraficNew(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('camp_grafic')->insert([
                'page' => $id,
                'date' => $data['date'],
                'places' => $data['places'],
                'smena' => $data['smena'],
                'free_places' => $data['free_places'],
            ]);

            return redirect()->route('index_campschedule', $id);
        }

        if ($data->isMethod('GET')) {
            return $this->index_campgraficNew($id);
        }
    }


    public function editCampgrafic(Request $request, $id)
    {
        $campgrafic = DB::table('camp_grafic')->where('id', $id)->first();
        $nameroute = "Редактирование расписания";
        return view('login/camp_grafic/campgraficEdit')
            ->with("main", $campgrafic)
            ->with("nameroute", $nameroute);
    }

    public function updateCampgrafic(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            DB::table('camp_grafic')
                ->where('id', $id)
                ->update([
                    'date' => $request['date'],
                    'places' => $request['places'],
                    'smena' => $request['smena'],
                    'free_places' => $request['free_places'],
                ]);
            $id = $request['page'];

            return redirect()->route('index_campschedule', $id);

        }
    }

    public function deleteCampgrafic(Request $request, $id)
    {
        $campGrafic = DB::table('camp_grafic')->where('id', $id)->first();
        $id_page = $campGrafic->page;
        if ($campGrafic) {
            DB::table('camp_grafic')->where('id', $id)->delete();
            return redirect()->route('index_campschedule', $id_page);
        } else {
            return redirect()->route('index_campschedule', $id_page);
        }
    }




        // Изменение в главной - Программа выходных (wekeends)


        public function campscheduleEdit(Request $data, $id)
        {
            if ($data->isMethod("POST")) {
                $images = array();
                $wekeend = DB::table('camp_schedule')->where('id', $id)->all();






                return redirect('wekeends/' . $id . '/edit');
            } else if ($data->isMethod("GET")) {
                return $this->index_campscheduleEdit($id);
            }
        }

        public function index_campscheduleEdit($id)
        {

            $mainindex = DB::table('wekeends')
            ->where('id', $id)
            ->first();

            $camp_schedule = DB::table('camp_schedule')
            ->where('page', $id)
            ->all();

             $nameroute = "Редактирование расписания : ";

             return view('login/camp_schedule/campScheduleList')
             ->with("campschedule", $camp_schedule)

             ->with("mainindex", $mainindex)
             ->with("nameroute", $nameroute);

        }


    public function index_wekeendsEdit($id)
    {

        $mainindex = DB::table('wekeends')
            ->where('id', $id)
            ->first();



        if($id == 1) { $nameroute = "Редактирование главной (Футбольные выходные): "; }

        if($id == 2) {  $nameroute = "Редактирование Киевская: "; }
        if($id == 3) {  $nameroute = "Редактирование Кузьминки: "; }
        if($id == 4) {  $nameroute = "Редактирование Парк-отель Горизонт: "; }
        if($id == 5) {  $nameroute = "Редактирование Дмитров Гольф Резорт: "; }
        if($id == 8) {  $nameroute = "Редактирование Хотьково: "; }


        return view('login/wekeends/wekeendsEdit')
            ->with("mainindex", $mainindex)
            ->with("nameroute", $nameroute);

    }


// Изменение в главной странице лагеря (camp)


    public function campEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {

            $images=array();
            if($files=$data->file('images')){
                foreach($files as $file){
                    $name =  $file->store('public/doc/main_index');

                    // $name=$file->getClientOriginalName();
                    //  $file->store('public/doc/main_index');
                    //   $file->move('image',$name);
                    $images[]=$name;
                }
            }

            DB::table('camp')
                ->where('id', $id)
                ->update([
                    'images_traning' => implode("|",$images),

                ]);



            return redirect('camp/1/edit');
        } else if ($data->isMethod("GET")) {
            return $this->index_campEdit($id);
        }
    }

    public function index_campEdit($id)
    {

        $mainindex = DB::table('camp')
            ->where('id', $id)
            ->first();



        $nameroute = "Редактирование главной (зимний лагерь): ";
        return view('login/camp/campEdit')
            ->with("mainindex", $mainindex)
            ->with("nameroute", $nameroute);

    }
    // Абонементы


    public function scheduleEdit(Request $data, $id)
    {
        if ($data->isMethod("POST")) {



            DB::table('training_schedule')
                ->where('id', $id)
                ->update([
                    'club_id' => $data['club_id'],
                    'group_age_id' => $data['group_age_id'],
                    'group_section_id' => $data['group_section_id'],
                    'monday_start' => $data['monday_start'],
                    'monday_end' => $data['monday_end'],
                    'tuesday_start' => $data['tuesday_start'],
                    'tuesday_end' => $data['tuesday_end'],
                    'wednesday_start' => $data['wednesday_start'],
                    'wednesday_end' => $data['wednesday_end'],
                    'thursday_start' => $data['thursday_start'],
                    'thursday_end' => $data['thursday_end'],
                    'friday_start' => $data['friday_start'],
                    'friday_end' => $data['friday_end'],
                    'saturday_start' => $data['saturday_start'],
                    'saturday_end' => $data['saturday_end'],
                    'sunday_start' => $data['sunday_start'],
                    'sunday_end' => $data['sunday_end'],
                ]);



            return redirect()->route('schedule');
        } else if ($data->isMethod("GET")) {
            return $this->index_scheduleEdit($id);
        }
    }

    public function index_scheduleEdit($id)
    {
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $schedule = DB::table('training_schedule')
            ->where('id', $id)
            ->first();

        $groupage  = DB::table('group_age')
            ->get();

        $grouplist = DB::table('group_section')
            ->get();

        $nameroute = "Редактирование расписания: ";
        return view('login/schedule/scheduleEdit')
            ->with("clublist", $clublist)
            ->with("groupage", $groupage)
            ->with("schedule", $schedule)

            ->with("grouplist", $grouplist)

            ->with("nameroute", $nameroute);

    }

    public function scheduleDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('training_schedule')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('schedule');

    }

// Видео Отзывы

    public function index_reviews_video()
    {
        $all = DB::table('reviews_video')->get();
        $nameroute = "Список видео отзывов";
        return view('login/reviewsvideo/reviewsVideoList')
            ->with("allreviews", $all)
            ->with("nameroute", $nameroute);
    }


//  Video Отзывы

    public function index_reviews()
    {
        $all = DB::table('reviews')->get();
        $nameroute = "Список отзывов";
        return view('login/reviews/reviewsList')
            ->with("allreviews", $all)
            ->with("nameroute", $nameroute);
    }

    public function index_reviewsVideoNew()
    {


        $nameroute = "Создание нового отзыва";
        return view('login/reviewsvideo/reviewsVideoNew')

            ->with("nameroute", $nameroute);
    }

    //
    public function createNewVideoReviews(Request $data)
    {
        if ($data->isMethod('POST')) {
            if (isset($data['display-front'])) {
                $display = true;
            } else {
                $display = false;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/reviews');
            } else {
                $path_image = '';
            }

            $pages = $data->input('pages', []);

            DB::table('reviews_video')->insert([
                'display_front' => $display,
                'name' => $data['name'],
                'img' => $path_image,
                'video' => $data['video'],
                'pages' => implode(',', $pages)
            ]);

            return redirect()->route('reviewsVideoList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_reviewsVideoNew();
        }
    }

    public function reviewsVideoEdit(Request $data, $id)
    {
        $review = DB::table('reviews_video')->where('id', $id)->first();

        if ($data->isMethod('POST')) {
            if (isset($data['display-front'])) {
                $display = true;
            } else {
                $display = false;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/reviews');
                Storage::delete($review->img);
            } else {
                $path_image = $review->img;
            }

            DB::table('reviews_video')
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],
                    'video' => $data['video'],
                    'display_front' => $display,
                    'img' => $path_image,
                    'pages' => implode(',', $data->input('pages', []))
                ]);

            return redirect()->route('reviewsVideoList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_reviewsVideoEdit($id);
        }
    }
    public function index_reviewsVideoEdit($id)
    {
        $review = DB::table('reviews_video')->where('id', $id)->first();

        $nameroute = "Редактирование отзыва: " . $review->id;
        return view('login/reviewsvideo/reviewsVideoEdit')

            ->with('review', $review)
            ->with("nameroute", $nameroute);
    }
    public function reviewsVideoDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('reviews_video')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('reviewsVideoList');

    }
// Отзывы

    public function index_reviewsNew()
    {


         $nameroute = "Создание нового отзыва";
        return view('login/reviews/reviewsNew')

            ->with("nameroute", $nameroute);
    }

    public function createNewReviews(Request $data)
    {
        if ($data->isMethod('POST')) {


            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/reviews');
            }else {
                $path_image = '';

            }



            DB::table('reviews')->insert([
                'display_front' => $display,
                'main' => 1,
                'image' => $path_image
            ]);

            return redirect()->route('reviewsList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_reviewsNew();
        }
    }


    public function reviewsEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/reviews');
                DB::table('reviews')
                    ->where('id', $id)
                    ->update([
                        'image' => $path_image
                    ]);
            }

            DB::table('reviews')
                ->where('id', $id)
                ->update([
                    'display_front' => $display
                ]);
            return redirect()->route('reviewsList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_reviewsEdit($id);
        }
    }

    public function index_reviewsEdit($id)
    {
        $review = DB::table('reviews')->where('id', $id)->first();

        $nameroute = "Редактирование отзыва: " . $review->id;
        return view('login/reviews/reviewsEdit')

            ->with('review', $review)
            ->with("nameroute", $nameroute);
    }


    public function reviewsDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('reviews')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('reviewsList');

    }

    // Отзывы

    public function index_club()
    {
        $allclub = DB::table('club')->get();
        $nameroute = "Список клубов";
        return view('login/club/clubList')
            ->with("allclub", $allclub)
            ->with("nameroute", $nameroute);
    }

    public function createNewCoach(Request $data)
    {
        if ($data->isMethod('POST')) {
            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }


            if (isset($data['display-front-camp']) == True) {
                $display_camp = True;
            } else {
                $display_camp = False;
            }


            $avail = "";
            for ($i = 1; $i < 8; $i++) {
                if (isset($data['d' . $i]) == True) {
                    $avail = $avail . '1';
                } else {
                    $avail = $avail . '0';
                }
            }
            $pages = $data->input('pages', []);


            $user_id =  DB::table('users')->insertGetId([
                'surname' => $data['surname'],
                'name' => $data['name'],
                'secondname' => $data['secondname'],
                'social_vk' => $data['social-vk'],
                'social_inst' => $data['social-inst'],
                'social_fb' => $data['social-fb'],
                'phone_number' => $data['phone_number'],
                'location' => $data['location'],
                'email' => $data['email'],
                'sex' => $data['sex']
            ]);

            $id = DB::table('coach')->insertGetId([
                'user_id' => $user_id,
                'education' => $data['education'],
                'license' => $data['license'],
                'career' => $data['career'],
                'cloth_size' => $data['cloth_size'],
                'marital_status' => $data['marital-st'],
                'kids' => $data['kids'],
                'seniority' => $data['seniority'],
                'career_football' => $data['career_football'] ?? null,
                'career_trainer' => $data['career_trainer'] ?? null,
                'achievements' => $data['achievements'] ?? null,
                'display_front' => $display,
                'display_front_camp' => $display_camp,
                'pages' => implode(',', $pages),
                'availability' => $avail
            ]);

            $coachNorm = Coach::query()->where("id", $id)->first();

            $clubIds = $data->input("club_ids");
            if ($clubIds) {
                $coachNorm->clubs()->sync($clubIds);
            }

            return redirect()->route('coachList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_coachNew();
        }
    }

    public function index_coachNew()
    {
        $clublist = DB::table('club')
            ->select('club.id', 'club.name', 'club.address')
            ->where('club.display_front', 1)
            ->get();

        $nameroute = "Создание нового тренера";
        return view('login/coach/coachNew')
            ->with('clublist', $clublist)

            ->with("nameroute", $nameroute);
    }

    public function createNewClub(Request $data)
    {
        if ($data->isMethod('POST')) {
            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }
            $arrcoach = "";
            if ($data->has('id_coachs')) {
                $arr = $data['id_coachs'];
                for ($i = 0; $i < count($data['id_coachs']); $i++) {
                    $arrcoach = $arrcoach . $arr[$i] . "/";
                }
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/logo');
            }else {
                $path_image = '';

            }

            if ($data->has('parking_img')) {
                $path_image_parking = $data->file('parking_img')->store('public/doc/club/parking_images');
            }else {
                $path_image_parking = '';

            }


                $id = DB::table('club')->insertGetId([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'coords' => $data['coords'],
                    'address' => $data['address'],

                    'metro' => $data['metro'],
                    'parking_image' => $path_image_parking,

                    'slug' => $data['slug'],

                    'raiting_coach' => $data['raiting_coach'],
                    'raiting_stadion' => $data['raiting_stadion'],
                    'id_splead' => $data['id_splead'],
                    'phone' => $data['phone'],
                    'time' => $data['time'],
                    'time' => $data['time'],
                    'id_manager' => $data['id_manager'],
                    'id_area' => $data['id_area'],
                    'display_front' => $display,
                    'logo' => $path_image
                ]);

            $club = Club::query()->where("id", $id)->first();
            $club->coaches()->sync($data['coaches']);
            $club->abonements()->sync($data['abonements']);

            return redirect()->route('clubList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_clubNew();
        }
    }


    public function index_clubNew()
    {
        $arrcoach = DB::table('coach')
            ->join('users', 'coach.user_id', '=', 'users.id')
            ->select('users.surname', 'users.name', 'coach.id')
            ->get();
        $arrmanagers = DB::table('users')
            ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
            ->select('users.surname', 'users.name', 'users.id')
            ->get();
        $arrarea = DB::table('area')->get();
        $nameroute = "Создание нового клуба";
        $abonements = Abonement::query()->get();
        $coaches = Coach::query()->get();
        return view('login/club/clubNew')
            ->with('abonements', $abonements)
            ->with('coaches', $coaches)
            ->with('arrmanagers', $arrmanagers)
            ->with('arrcoach', $arrcoach)
            ->with('arrarea', $arrarea)
            ->with("nameroute", $nameroute);
    }

    public function clubEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            $arrcoach = "";
            if ($data->has('id_coachs')) {
                $arr = $data['id_coachs'];
                for ($i = 0; $i < count($data['id_coachs']); $i++) {
                    $arrcoach = $arrcoach . $arr[$i] . "/";
                }
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/club/logo');
                DB::table('club')
                    ->where('id', $id)
                    ->update([
                        'logo' => $path_image
                    ]);
            }

            if ($data->has('ico')) {

                $path_image_ico = $data->file('ico')->store('public/doc/club/icons');
                DB::table('club')
                    ->where('id', $id)
                    ->update([
                        'ico' => $path_image_ico
                    ]);
            }


            if ($data->has('parking_img')) {
                $path_image_parking = $data->file('parking_img')->store('public/doc/club/parking_images');
                DB::table('club')
                    ->where('id', $id)
                    ->update([
                        'parking_image' => $path_image_parking
                    ]);
            }

            DB::table("club")
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],
                    'coords' => $data['coords'],
                    'address' => $data['address'],
                    'metro' => $data['metro'],
                    'description' => $data['description'],
                    'id_manager' => $data['id_manager'],
                    'slug' => $data['slug'],
                    'id_area' => $data['id_area'],
                    'raiting_coach' => $data['raiting_coach'],
                    'raiting_stadion' => $data['raiting_stadion'],
                    'raiting_manager' => $data['raiting_manager'],
                    'phone' => $data['phone'],
                    'time' => $data['time'],
                    'id_splead' => $data['id_splead'],
                    'display_front' => $display
                ]);

            $club = Club::query()->where("id", $id)->first();
            $club->coaches()->sync($data['coaches']);
            $club->abonements()->sync($data['abonements']);
            return redirect()->route('clubList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_clubEdit($id);
        }
    }

    public function index_clubEdit($id)
    {
        $club = DB::table('club')->where('id', $id)->first();
        $clubModel = Club::query()->where("id", $id)->first();
        $arrmanagers = DB::table('users')
            ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
            ->select('users.surname', 'users.name', 'users.id')
            ->get();
        $arrarea = DB::table('area')->get();
        $nameroute = "Редактирование клуба: " . $club->name;
        $abonements = Abonement::query()->get();
        $coaches = Coach::query()->get();
        return view('login/club/clubEdit')
            ->with('arrmanagers', $arrmanagers)
            ->with('abonements', $abonements)
            ->with('coaches', $coaches)
            ->with('arrarea', $arrarea)
            ->with('club', $club)
            ->with('clubModel', $clubModel)
            ->with("nameroute", $nameroute);
    }

    public function clubDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('club')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->route('clubList');

    }


    public function index_blog()
    {
        $allblog = DB::table('blog')->orderBy('id', 'DESC')->get();
        $nameroute = "Блог";
        return view('login/blog/blogList')
            ->with("allblog", $allblog)
            ->with("nameroute", $nameroute);
    }

    public function createNewBlog(Request $data)
    {
        if ($data->isMethod('POST')) {

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/blog/photo');
                DB::table('blog')->insert([
                    'name' => $data['name'],
                    'content' => $data['content'],
                    'display_front' =>  $display,
                    'tags' => $data['tags'],
                    'id_club' => $data['id_club'],
                    'photo' => $path_image,

                ]);
            } else {
                DB::table('blog')->insert([
                    'name' => $data['name'],
                    'content' => $data['content'],
                    'display_front' =>  $display,
                    'tags' => $data['tags'],
                    'id_club' => $data['id_club'],
                ]);
            }
            return redirect()->route('blogList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_blogNew();
        }
    }

    public function blogEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }

            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/blog/photo');
                DB::table('blog')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'content' => $data['content'],
                        'tags' => $data['tags'],
                        'display_front' =>  $display,
                        'id_club' => $data['id_club'],
                        'photo' => $path_image,
                    ]);
            } else {
                DB::table('blog')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'content' => $data['content'],
                        'display_front' =>  $display,
                        'tags' => $data['tags'],
                        'id_club' => $data['id_club'],
                    ]);
            }
            return redirect()->route('blogList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_blogEdit($id);
        }
    }
    public function uploadImage2(Request $request)
    {
        // Проверка наличия файла
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No image was found in the request'], 400);
        }

        // Получение изображения из запроса и сохранение
        $image = $request->file('image');
        $path = $image->store('public/images');

        // Формирование полного URL-адреса изображения
        $url = Storage::url($path);

        // Возвращение ответа
        return response()->json(['default' => $url]);
    }
    public function blogDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('blog')
                ->where('id', $id)
                ->delete();
        }
        return redirect()->route('blogList');

    }

    public function index_blogNew()
    {

        $nameroute = "Создание записи";
        return view('login/blog/blogNew')

            ->with("nameroute", $nameroute);
    }

    public function index_blogEdit($id)
    {
        $blog = DB::table('blog')
            ->where('id', $id)
            ->first();
        if ($blog->date != "") {
            $arr = explode("-", $blog->date);
            $date = $arr[2] . '.' . $arr[1] . '.' . $arr[0];
        } else {
            $date = "";
        }

        $nameroute = "Редактирование записи: " . $blog->name;
        return view('login/blog/blogEdit')

            ->with('blog', $blog)
            ->with('date', $date)
            ->with("nameroute", $nameroute);
    }


    //

    public function index_news()
    {
        $allnews = DB::table('news')->get();
        $nameroute = "Список новостей";
        return view('login/news/newsList')
            ->with("allnews", $allnews)
            ->with("nameroute", $nameroute);
    }

    public function createNewNews(Request $data)
    {
        if ($data->isMethod('POST')) {
            if ($data->has('date')) {
                $date = explode(".", $data['date']);
                $date_sql = $date[2] . '-' . $date[1] . '-' . $date[0];
            } else {
                $date_sql = "";
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/news/photo');
                DB::table('news')->insert([
                    'name' => $data['name'],
                    'content' => $data['content'],
                    'date' => $date_sql,
                    'tags' => $data['tags'],
                    'id_club' => $data['id_club'],
                    'photo' => $path_image,

                ]);
            } else {
                DB::table('news')->insert([
                    'name' => $data['name'],
                    'content' => $data['content'],
                    'date' => $date_sql,
                    'tags' => $data['tags'],
                    'id_club' => $data['id_club'],
                ]);
            }
            return redirect()->route('newsList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_newsNew();
        }
    }

    public function newsEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            if ($data->has('date')) {
                $date = explode(".", $data['date']);
                $date_sql = $date[2] . '-' . $date[1] . '-' . $date[0];
            } else {
                $date_sql = "";
            }
            if ($data->has('img')) {
                $path_image = $data->file('img')->store('public/doc/news/photo');
                DB::table('news')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'content' => $data['content'],
                        'date' => $date_sql,
                        'tags' => $data['tags'],
                        'id_club' => $data['id_club'],
                        'photo' => $path_image,
                    ]);
            } else {
                DB::table('news')
                    ->where('id', $id)
                    ->update([
                        'name' => $data['name'],
                        'content' => $data['content'],
                        'date' => $date_sql,
                        'tags' => $data['tags'],
                        'id_club' => $data['id_club'],
                    ]);
            }
            return redirect()->route('newsList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_newsEdit($id);
        }
    }

    public function newsDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('news')
                ->where('id', $id)
                ->delete();
        }
        return redirect()->route('newsList');

    }

    public function index_newsNew()
    {
        $arrclub = DB::table('club')
            ->select('club.name', 'club.id')
            ->get();
        $nameroute = "Создание новости";
        return view('login/news/newsNew')
            ->with('arrclub', $arrclub)
            ->with("nameroute", $nameroute);
    }

    public function index_newsEdit($id)
    {
        $news = DB::table('news')
            ->where('id', $id)
            ->first();
        if ($news->date != "") {
            $arr = explode("-", $news->date);
            $date = $arr[2] . '.' . $arr[1] . '.' . $arr[0];
        } else {
            $date = "";
        }
        $arrclub = DB::table('club')
            ->select('club.name', 'club.id')
            ->get();
        $nameroute = "Редактирование новости: " . $news->name;
        return view('login/news/newsEdit')
            ->with('arrclub', $arrclub)
            ->with('news', $news)
            ->with('date', $date)
            ->with("nameroute", $nameroute);
    }

    public function index_upstudent()
    {
        $allupstudent = DB::table('upstudent')->get();
        $nameroute = "Список успехов учеников";
        return view('login/upstudent/upstudentList')
            ->with("allupstudent", $allupstudent)
            ->with("nameroute", $nameroute);
    }

    public function createNewUpstudent(Request $data)
    {
        if ($data->isMethod('POST')) {

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }
            if ($data->has('photo_sb')) {
                $path_image_1 = $data->file('photo_sb')->store('public/doc/upstudent/photo');
            } else {
                $path_image_1 = "";
            }
            if ($data->has('photo_up')) {
                $path_image_2 = $data->file('photo_up')->store('public/doc/upstudent/photo');
            } else {
                $path_image_2 = "";
            }
            DB::table('upstudent')->insert([
                'surname' => $data['surname'],
                'name' => $data['name'],
                'club_up' => $data['club_up'],
                'photo_sb' => $path_image_1,
                'photo_up' => $path_image_2,
                'display_front' => $display
            ]);

            return redirect()->route('upstudentList');
        }

        if ($data->isMethod('GET')) {
            return $this->index_upstudentNew();
        }
    }

    public function upstudentEdit(Request $data, $id)
    {
        if ($data->isMethod('POST')) {

            if (isset($data['display-front']) == True) {
                $display = True;
            } else {
                $display = False;
            }
            if ($data->has('photo_sb')) {
                $path_image_1 = $data->file('photo_sb')->store('public/doc/upstudent/photo');
                DB::table('upstudent')
                    ->where('id', $id)
                    ->update([
                        'photo_sb' => $path_image_1,
                    ]);
            }
            if ($data->has('photo_up')) {
                $path_image_2 = $data->file('photo_up')->store('public/doc/upstudent/photo');
                DB::table('upstudent')
                    ->where('id', $id)
                    ->update([
                        'photo_up' => $path_image_2,
                    ]);
            }

            DB::table('upstudent')
                ->where('id', $id)
                ->update([
                    'surname' => $data['surname'],
                    'name' => $data['name'],
                    'club_up' => $data['club_up'],
                    'display_front' => $display
                ]);

            return redirect()->route('upstudentList');
        }
        if ($data->isMethod('GET')) {
            return $this->index_upstudentEdit($id);
        }
    }

    public function upstudentDelete(Request $data, $id)
    {
        if ($data->isMethod('POST')) {
            DB::table('upstudent')
                ->where('id', $id)
                ->delete();
        }
        return redirect()->route('upstudentList');

    }

    public function index_upstudentNew()
    {
        $nameroute = "Создание записи успехов ученика";
        return view('login/upstudent/upstudentNew')
            ->with("nameroute", $nameroute);
    }

    public function index_upstudentEdit($id)
    {
        $upstudent = DB::table('upstudent')
            ->where('id', $id)
            ->first();

        $nameroute = "Редактирование записи: " . $upstudent->surname . " " . $upstudent->name;
        return view('login/upstudent/upstudentEdit')
            ->with('upstudent', $upstudent)
            ->with("nameroute", $nameroute);
    }

}
