<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 18/04/16
 * Time: 16:59
 */

namespace App;


class CreateProfileJSON implements  profile
{
    public  function show($user){
       return "JSON";
    }
}