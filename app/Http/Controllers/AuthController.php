<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/01/2017
 * Time: 14:25
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{


    /**
     * AuthController constructor.
     */
    public function __construct()
    {

    }

    public function login( $request){
        if($request->email && $request->password){
            if($user = User::where('email',$request->email)->first() ){
                if(app('hash')->check($request->password,$user->password))
                {
                 return true;
                }
            }
        }
      return false;
    }

    public function attemptLogin(Request $request){
        if($this->login($request))
        {
            return "Successfull login";
        }
        return "Invalid credentials";
    }
}