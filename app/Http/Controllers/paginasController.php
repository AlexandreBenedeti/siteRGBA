<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{
   public function getRedesSociais(){
       $redesSociais = [
                        'face' => 'https://www.facebook.com/alexandrebenedeti',
                        'linkedin' => 'https://www.linkedin.com/in/alexandre-benedeti-gon%C3%A7alves-26b03051/'      
                        ];
       return view('contato02',$redesSociais);
   }
}
