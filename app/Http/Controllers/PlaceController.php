<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Login;
use App\Place;
use Illuminate\Support\Facades\Input;

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
        $login = new Login;
        $login->token = Input::get('token');
        $login->save();
        return response()->json(array("login"=>$login), 200);
    }

    public function savePlace(){
        $place = new Place;
        $place->login_id = Input::get('login_id');
        $place->lat = Input::get('lat');
        $place->lng = Input::get('lng');
        $place->address = Input::get('address');
        $place->save();
        return response()->json(array("place"=>$place), 200);
    }

    public function getPlaces(){
        $login_id = Input::get('login_id');
        return response()->json(array("places"=>Place::where('login_id', $login_id)->get()), 200);
    }
}