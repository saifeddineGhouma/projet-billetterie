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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','FrontController@index')->name('accueil');
/// strat route  matche
Route::get('Admin/Match','MatchController@index')->name('match_liste');
Route::get('Admin/match/ajouter','MatchController@create')->name('create_match');
Route::post('Admin/match/store','MatchController@store')->name('store_match');
Route::get('Admin/match/{id}/edit','MatchController@edit');
Route::get('Admin/match/{id}/update','MatchController@update');
Route::get('Admin/match/{id}/delete','MatchController@destroy');
Route::get('test',function(){

	return "test";
});

//  end rout match

//  start route  zone
 
Route::get('Admin/zone','ZoneController@index')->name('zone_liste');
Route::get('Admin/zone/ajouter','ZoneController@create')->name('create_zone');
Route::post('Admin/zone/store','ZoneController@store')->name('store_zone');
Route::get('Admin/zone/{id}/edit','ZoneController@edit');
Route::get('Admin/zone/{id}/update','ZoneController@update');
Route::get('Admin/zone/{id}/delete','ZoneController@destroy');
// end  route zone

// strat route stade
Route::get('Admin/stade','StadeController@index')->name('stade_liste');
Route::get('Admin/stade/ajouter','StadeController@create')->name('create_stade');
Route::post('Admin/stade/store','StadeController@store')->name('store_stade');
Route::get('Admin/stade/{id}/edit','StadeController@edit');
Route::get('Admin/stade/{id}/update','StadeController@update');
Route::get('Admin/stade/{id}/delete','StadeController@destroy');


//  end route stade
// strat route Billet

//Route::get('/','StadeController@index')->name('stade_liste');
Route::get('/Billet/ajouter/{id}','BilletController@create')->name('create_billet');
Route::post('/Billet/store/{id}','BilletController@store')->name('store_billet');
Route::get('/stade/{id}/edit','BilletController@edit');
Route::get('/stade/{id}/update','BilletController@update');
Route::get('/stade/{id}/delete','BilletController@destroy');
Route::get('/ticket','BilletController@ticket')->name('ticket');

//end route billet
// strat route equipe
Route::get('Admin/equipe','EquipeController@index')->name('equipe_liste');
Route::get('Admin/equipe/ajouter','EquipeController@create')->name('create_equipe');
Route::post('Admin/equipe/store','EquipeController@store')->name('store_equipe');
Route::get('Admin/equipe/{id}/edit','EquipeController@edit');
Route::get('Admin/equipe/{id}/update','EquipeController@update');
Route::get('Admin/equipe/{id}/delete','EquipeController@destroy');


//  end route equipe



Route::get('/Billet','BilletController@index')->name('Billet');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('Admin/arbitre','ArbitreController@index')->name('listeArbitre');
Route::get('Admin/arbitre/ajouter','ArbitreController@create')->name('AjouterArbitre');
Route::post('Admin/arbitre/add','ArbitreController@store')->name('addArbitre');
Route::get('Admin/arbitre/{id}/edit','ArbitreController@edit')->name('EditArbitre');
Route::post('Admin/arbitre/{id}/update','ArbitreController@update')->name('updateArbitre');
Route::get('Admin/arbitre/{id}/destroy','ArbitreController@destroy')->name('destroyArbitre');

