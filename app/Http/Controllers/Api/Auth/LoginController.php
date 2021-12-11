<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginIntoAccount(Request $request){
         // Validate
        $this->validate($request, [
            'email'     => 'sometimes|string|email|max:255',
            'password'  => 'required|string|min:6|max:64',
        ]);

        // Get user with email address
        $user = User::where('email', $request->email)->first();

       if(!empty($user) && Hash::check($request->password, $user->password)){
             return response()->json(array(
                    'data' => array(
                        'name'      => $user->name,
                        'email'     => $user->email,
                        'token'     => $user->createToken('Auth Token')->accessToken
                    ),
                    'status' => true,
                    'message' => array('User Authorized')
                ), 200);
          }
              return response()->json(array(
                    'data' => array(),
                    'status' => false,
                    'message' => array('You have provided wrong credentials (or) your account does not exits!')
                ), 400);
}

}