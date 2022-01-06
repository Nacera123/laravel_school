<?php

use Illuminate\Support\Facades\Route;

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


//notre index
Route::get('/', function () {return view('welcome');});

// route vers le detail des formations
route::get('formation','App\Http\Controllers\FormationController@formationall')->name('formation_detail');

//................................route vers la page du crud...........................................
// ici c'est la route initiale en get
route::get('users','App\Http\Controllers\MainController@formationcrud')->name('users');

// ici on active le bouton supprimer  la formation avec la methode 'POST' toujours a l'interieur de la page users.php
route::post('/delete_formation/{id}','App\Http\Controllers\MainController@delete_formation')->name('delete_formation');

// ici on active le bouton supprimer le compte avec la methode 'POST' toujours a l'interieur de la page users.php
route::post('/delete_compte/{id}','App\Http\Controllers\MainController@delete_compte')->name('delete_compte');

// ici on active le bouton supprimer l'utilisateur avec la methode 'POST' toujours a l'interieur de la page users.php
route::post('/delete_utilisateur/{id}','App\Http\Controllers\MainController@delete_utilisateur')->name('delete_utilisateur');


Route::get('/toto', function () {return view('toto');});

