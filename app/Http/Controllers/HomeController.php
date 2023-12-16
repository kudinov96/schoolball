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

class HomeController extends Controller
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

    public function editProfile(Request $data) {
      if ($data->isMethod('POST')) {
        if ($data->has('date-birth')) {
          $date = explode(".", $data['date-birth']);
          $date_sql = $date[2].'-'.$date[1].'-'.$date[0];
        } else {
          $date_sql = "";
        }
        DB::table('users')
          ->where('id', Auth::user()->id)
          ->update([
           'surname' => $data['surname'],
           'name' => $data['name'],
           'secondname' => $data['secondname'],
           'date_birth' => $date_sql,
           'social_vk' => $data['social-vk'],
           'social_inst' => $data['social-inst'],
           'social_fb' => $data['social-fb'],
           'phone_number' => $data['phone_number'],
           'location' => $data['location'],
           'email' => $data['email'],
           'sex' => $data['sex'],
          ]);
        if ($data->has('img')) {
            $path_image = $data->file('img')->store('public/doc/users/'.Auth::user()->id.'/photo');
            DB::table('users')
              ->where('id', Auth::user()->id)
              ->update([
               'photo' => $path_image,
              ]);
        }

        return redirect()->route('home');

      }

      return $this->indexEdit();

    }

    public function indexEdit() {
      if (Auth::user()->date_birth != "") {
        $arr = explode("-", Auth::user()->date_birth);
        $date = $arr[2].'.'.$arr[1].'.'.$arr[0];
      } else {
        $date = "";
      }
      $nameroute = "Личная карточка";
        return view('login.editprofile')
          ->with('date', $date)
          ->with('nameroute', $nameroute);
    }

    public function index_kinship() {
        $allkid = DB::table('kinship')
          ->join('kids', 'kinship.kid_id', '=', 'kids.id')
          ->where('parent_id', Auth::user()->id)
          ->select('kids.id', 'kids.name', 'kids.surname', 'kids.photo')
          ->get();

        return view('login/kinship/kinshipList')
          ->with("allkid", $allkid);
    }
    public function createNewKinship(Request $data) {
      if ($data->isMethod('POST')) {
        if ($data->has('date-birth')) {
          $date = explode(".", $data['date-birth']);
          $date_sql = $date[2].'-'.$date[1].'-'.$date[0];
        } else {
          $date_sql = "";
        }
        DB::table('kids')->insert([
          'surname' => $data['surname'],
          'name' => $data['name'],
          'date_birth' => $date_sql,
          'sex' => $data['sex'],
        ]);
        $kid = DB::table('kids')->orderby('id', 'desc')->first();
        if ($data->has('img')) {
          $path_image = $data->file('img')->store('public/doc/kids/'.$kid->id.'/photo');
          DB::table('kids')
            ->where('id', $kid->id)
            ->update([
              'photo' => $path_image
          ]);
        }
        DB::table('kinship')->insert([
          'parent_id' => Auth::user()->id,
          'kid_id' => $kid->id
        ]);
        return $this->index_kinship();
      }

      if ($data->isMethod('GET')) { return $this->index_kinshipNew(); }
    }
    public function kinshipEdit(Request $data, $id) {
      if ($data->isMethod('POST')) {
        if ($data->has('date-birth')) {
          $date = explode(".", $data['date-birth']);
          $date_sql = $date[2].'-'.$date[1].'-'.$date[0];
        } else {
          $date_sql = "";
        }
        DB::table('kids')
          ->where('id', $id)
          ->update([
            'surname' => $data['surname'],
            'name' => $data['name'],
            'date_birth' => $date_sql,
            'sex' => $data['sex'],
        ]);
        if ($data->has('img')) {
          $path_image = $data->file('img')->store('public/doc/kids/'.$id.'/photo');
          DB::table('kids')
            ->where('id', $id)
            ->update([
              'photo' => $path_image
          ]);
        }

        return $this->index_kinship();
      }
      if ($data->isMethod('GET')) { return $this->index_kinshipEdit($id); }
    }
    public function index_kinshipNew() {
        return view('login/kinship/kinshipNew');
    }
    public function index_kinshipEdit($id) {
      $kid = DB::table('kids')->where('id', $id)->first();
      if ($kid->date_birth != "") {
        $arr = explode("-", $kid->date_birth);
        $date = $arr[2].'.'.$arr[1].'.'.$arr[0];
      } else {
        $date = "";
      }
      return view('login/kinship/kinshipEdit')
       ->with('kid', $kid)
       ->with('date', $date);
    }

    public function index() {
        $nameroute = "Личный кабинет";
        return view('home')
          ->with("nameroute", $nameroute);
    }

}
