<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('projs', function () {
    return view('projetos');
});

/*Route::get('equipe02', function(){
    return view('equipe02');
});*/  
    
/*Route::get('contato', function () {
    $redesSociais = [
 'face' => 'https://www.facebook.com/alexandrebenedeti',
 'linkedin' => 'https://www.linkedin.com/in/alexandre-benedeti-gon%C3%A7alves-26b03051/'      
  ];
    return view('contato', $redesSociais);
});*/

Route::get('contato02', 'paginasController@getRedesSociais');

Route::get('equipe02', 'equipeController@Membros_equipe');
