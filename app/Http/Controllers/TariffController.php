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

class TariffController extends Controller
{

    // выбор отделения
    public function index()
    {
        $clubs =  DB::table('club')
            ->select('club.id', 'club.name')
            ->where('club.display_front', 1)
            ->get();
        return view('clubs_form', ['clubs' => $clubs]);
    }

    public function selectCity(Request $request){
        if($request->ajax()){
            $cities = City::where('id_country',$request->id_country)->get()->pluck("name","id");
            $data = view('selectcity',['cities' => $cities])->render();
            return response()->json(['options'=>$data]);
        }
    }
}
