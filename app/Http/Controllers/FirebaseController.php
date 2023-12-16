<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    //

    public function index() {

      $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/FirebaseKey.json')
        ->withDatabaseUri('https://school-ball-5b9e2.firebaseio.com/')
        ->createDatabase();

      $database = app('firebase.database');
      $createPost = $database
      ->getReference('blog/posts')
      ->push([
          'title' =>  'Laravel 6',
          'body'  =>  'This is really a cool database that is managed in real time.'

      ]);

      echo '<pre>';
      print_r($createPost->getvalue());
      echo '</pre>';

    }
}
