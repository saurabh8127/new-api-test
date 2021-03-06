<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware(['auth:api']);
    }

   public function logout(){
        // Delete Current Token
        Auth::user()->token()->delete();

        return response()->json(array(
            'data' => array(),
            'status' => true,
            'message' => array('Logged out!')
        ), 200);
    }

}

