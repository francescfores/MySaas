<?php

namespace App\Http\Controllers;

use App\CreateProfileHTML;
use App\CreateProfileJSON;
use App\IProfile;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function show(IProfile $profile){

        return $profile->show(Auth::user());
//        $creator = new CreateProfileHTML();
//        return Auth::user()->profile($creator);
    }


}
