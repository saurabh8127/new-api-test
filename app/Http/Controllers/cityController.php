<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class cityController extends Controller
{
   //insert 
    public function addData (Request $request){
      // Validate
      $this->validate($request, [
        'name'      => 'required|string|alpha_dash|max:255|min:4',
       ]);
       
     //get user details
      $user=City::create([
        'name'      => $request->name,         
      ]);

        // Success Response
        return response()->json(array(
          'data' => array(
              'name' => $user->name
          ),
          'status' => true,
          'message' => array('Data inserted.')
      ), 200);
    }
    //fetch data
    public function getData(){
      return City::all();
      return response()->json(array('message' => array('All table data.')));
    }

     // delete data
     public function deleteData($id){
      City::find($id)->delete();
      return response()->json(array('message' => array('Delete data.')));
     }

     //update
     public function updateData(Request $request){

        // return ["status"=>"upadate"];
        // dd($request->name);
        // Validate
       $this->validate($request, [
        'name'      => 'required|string|alpha_dash|max:255|min:4',
       ]); 
      $cityName=City::find($request->id);
      $cityName->name=$request->name;
      $result=$cityName->save();
      if($result){
        return response()->json(array('message' => array(' data has been update.')));
      }else{
        return response()->json(array('message' => array('Not update.')));
      }
     }

     //search data
     public function searchData($name){
      //  dd($name);
       return City::where("name",$name)->get();
     }
}
