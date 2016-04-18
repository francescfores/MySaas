<?php

namespace App\Http\Controllers;

use App\User;
use Cache;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user = Cache::remember('query.users',10,function(){
            return User::all();
        });
        return $user;
    }
    public function store($request){
        User::create(['name' =>'pepet', 'email' => 'pepet@gmail.com']);
        return ['created' => true];
        Event::fire('users');
    }

    public function update(){
        $user =  User::first();

        $user->name="pepita";

        $user->save();

        //Cache::flush(); //Carrega tota la cache

        //Cache::forget('query.users'); //Carrega sol la cache de query.users
        Event::fire('user.change');
    }

    public function destroy(){
        User::destroy();

        Event::fire('user.change');
    }


}
