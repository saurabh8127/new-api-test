<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct(){
    //     $this->middleware(['auth:api']);
    // } 
  public function getUserDetails(Request $request )
  {
        $num_1=$request->number_1;
        $num_2=$request->number_2;
        $sub=$num_1 - $num_2;
        // echo $sub;
      return response()->json(['sub'=>$sub]);

  }
  public function add(Request $request )
  {
        $num_1=$request->number_1;
        $num_2=$request->number_2;
        $add=$num_1 + $num_2;
        // echo $sub;
      return response()->json(['add'=>$add]);

  }
  public function multiple(Request $request )
  {
        $num_1=$request->number_1;
        $num_2=$request->number_2;
        $multiple=$num_1 * $num_2;
        // echo $sub;
      return response()->json(['multiple'=>$multiple]);

  }
  public function division(Request $request )
  {
        $num_1=$request->number_1;
        $num_2=$request->number_2;
        $division=$num_1 / $num_2;
        // echo $sub;
      return response()->json(['division'=>$division]);

  }
}
