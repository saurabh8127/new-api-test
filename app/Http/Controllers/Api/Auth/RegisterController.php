<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function createAccount(Request $request){


 // Validate
      $this->validate($request, [
            'name'      => 'required|string|alpha_dash|max:255|min:4',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|max:64',
      ]);

//get user details
      $user=User::create([
      'name'      => $request->name,
      'email'     => $request->email,
      'password'  => Hash::make($request->password)
                
      ]);
  
 // Success Response
                return response()->json(array(
                    'data' => array(
                        'email' => $user->email
                    ),
                    'status' => true,
                    'message' => array('User registered.')
                ), 200);
            }
        }



