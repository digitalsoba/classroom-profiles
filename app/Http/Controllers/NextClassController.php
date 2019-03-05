<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Response;
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

    public function getSchedules(){

        $client = new Client();
        $email = $this->retrieveEmail();
        //dd($email);
        $url = 'https://api.sandbox.csun.edu/metalab/roster/api/2.1/memberships/nr_'.$email.'/classes';
        $response = $client->get($url);

        //echo $response->getStatusCode(); # 200
       // echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
       // echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'
        $results = $response->getBody()->getContents();
        $classes = json_decode($results)->classes;
       // dd($classes[0]);
        $urlClass = 'https://api.metalab.csun.edu/curriculum/api/2.0/terms/Spring-2019/classes/'.$classes[0]->subject.'-'.$classes[0]->catalog_number;
        $response = $client->get($urlClass);
       // dd($response);
        return $response;

    }


}
