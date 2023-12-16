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

class ScheduleController extends Controller
{

  public function index_schedule() {
      $allclub = DB::table('club')->get();
      return view('login/club/clubList')
        ->with("allclub", $allclub);
  }
  public function createNewSchedule(Request $data) {
    if ($data->isMethod('POST')) {


    }

    return $this->index_club();
    
  }
  public function scheduleEdit(Request $data, $id) {
    if ($data->isMethod('POST')) {

    }

    return $this->index_club();

  }
  public function index_scheduleNew() {
      $arrcoach = DB::table('coach')
          ->join('users', 'coach.user_id', '=', 'users.id')
          ->select('users.surname', 'users.name', 'coach.id')
          ->get();
      $arrmanagers = DB::table('users')
          ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
          ->select('users.surname', 'users.name', 'users.id')
          ->get();
      $arrarea = DB::table('area')->get();
      return view('login/club/clubNew')
        ->with('arrmanagers', $arrmanagers)
        ->with('arrcoach', $arrcoach)
        ->with('arrarea', $arrarea);
  }

}
