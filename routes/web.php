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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/medecins', 'MedecinController@newMedecin');
//Route::get('/listmedecins', 'MedecinController@listMedecin');


//Route::get('/secraitaires', 'SecraitaireController@newSecraitaire');
//Route::get('/listsecraitaires', 'SecraitaireController@listSecraitaire');



//Route::get('/patients', 'PatientController@newPatient');
//Route::get('/listpatients', 'PatientController@listPatient');
////////


// list des patients/////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('patients', 'PatientController@index');

Route::get('patients/create', 'PatientController@create');

Route::post('patients', 'PatientController@store');


Route::get('patients/{id}/edit', 'PatientController@edit');

Route::put('patients/{id}', 'PatientController@update');

Route::delete('patients/{id}', 'PatientController@destroy');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////list des medecins ///////////////////////////////////////////////////////////////////////////////////////














///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

