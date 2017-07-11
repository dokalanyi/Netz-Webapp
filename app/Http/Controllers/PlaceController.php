<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Login;
use App\Place;

class PlaceController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function saveToken()
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function savePlace(){

    }

    public function getPlaces(){
        
    }
}