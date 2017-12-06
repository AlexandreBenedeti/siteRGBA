<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class equipeController extends Controller
{
    //{
    function Membros_equipe(){
        
        
        $equipe = ['Alexandre Benedeti', 'Arthur Justiniano', 'Paulo Bressan', 'Thiago Reis'];
        return view('equipe02', compact('equipe'));
       
    }
}

