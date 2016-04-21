<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/4710', 'fourseventencontroller@index');
Route::get('/4710/patients', 'fourseventencontroller@index3');
Route::get('/4710/invoices', 'fourseventencontroller@invoicepage');
Route::get('/4710/patientvisits', 'fourseventencontroller@patientvisitpage');
Route::get('/4710/diagnosis', 'fourseventencontroller@diagnosispage');
Route::get('/4710/diagnosisnote', 'fourseventencontroller@diagnosisnotepage');
Route::get('/4710/drug', 'fourseventencontroller@drugpage');
Route::get('/4710/drugscript', 'fourseventencontroller@drugscriptpage');
Route::get('/4710/medicalpersciption', 'fourseventencontroller@medicalpersciptionpage');
Route::get('/4710/payment', 'fourseventencontroller@paymentpage');
Route::get('/4710/procedure', 'fourseventencontroller@procedurepage');
Route::get('/4710/procedurenote', 'fourseventencontroller@procedurenotepage');
Route::get('/4710/referral', 'fourseventencontroller@referralpage');
Route::get('/4710/room', 'fourseventencontroller@roompage');
Route::get('/4710/service', 'fourseventencontroller@servicepage');
Route::get('/4710/staff', 'fourseventencontroller@staffpage');
Route::get('/4710/test', 'fourseventencontroller@testpage');

Route::post('/4710', 'Fourseventencontroller@index2');

Route::auth();

Route::get('/home', 'HomeController@index');
