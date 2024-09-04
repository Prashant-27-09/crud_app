<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "User";
    }

    function getUserName($name){
        return "User ".$name;
    }
}
