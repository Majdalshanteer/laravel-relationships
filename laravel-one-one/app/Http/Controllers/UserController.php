<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class UserController extends Controller
{
    //
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $phone = User::find(1)->phone;
  
        dd($phone);

        $user = Phone::find(1)->user;
  
        dd($user);
        
        $user = User::find(1);
   
        $phone = new Phone;
        $phone->phone = '9429343852';
           
        $user->phone()->save($phone);

        $phone = Phone::find(1);
   
        $user = User::find(10);
           
        $phone->user()->associate($user)->save();
    }
}
