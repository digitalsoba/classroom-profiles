<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NextClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrieveEmail(){

        if(auth()==true) {  //if a student has succesfully logged in
            $user = new User();
            return $user->retrieveAuthorizedEmail();  //return their email
        }
    }
}
