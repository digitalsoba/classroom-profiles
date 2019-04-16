<?php

namespace App\Http\Controllers;

use App\Models\NextClass;
use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
        $email = $this->retrieveEmail();//DO NOT DELETE
        //dd($email); DO NOT DELETE
        //$url = 'https://api.sandbox.csun.edu/metalab/roster/api/2.1/memberships/nr_'.$email.'/classes'; METALAB API DO NOT DELETE
        $url = 'https://2lgp8pinel.execute-api.us-west-2.amazonaws.com/default/roster-api'; //DUMMY API
        $response = $client->get($url);


        $results = $response->getBody()->getContents();
        $classes = json_decode($results)->classes;
       // $classes[0]->class_number = '16087';
        //$classes[1]->class_number = '16544';

        foreach ($classes as $class){

            $urlClass = 'https://api.metalab.csun.edu/curriculum/api/2.0/terms/Spring-2019/classes/'.$class->class_number;
            $response = $client->get($urlClass);
            $scheduleResults = $response->getBody()->getContents();
            $schedule = json_decode($scheduleResults);

            $scheduleResultsArray[] = $schedule;
        }


        foreach ($scheduleResultsArray as $schedules){

            $classes = $schedules->classes;

            foreach ($classes as $class){

                foreach ($class->meetings as $meeting){

                    $locations[] = $meeting->location;



                }
            }

        }

        return $locations;

    }


}
