<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class tableInfoController extends Controller
{
     public function info(){
      return User::all();
     }
     public function addUser(){
      return User::all();
     }
}
