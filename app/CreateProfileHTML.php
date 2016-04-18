<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 18/04/16
 * Time: 16:59
 */

namespace App;


class CreateProfileHTML implements  profile
{
    public  function show($user){
                return "<div>
                    ID : <b> ". $user->id . " <b><br>
                    Name :  ". $user->name . "
                    </div>";
    }
}