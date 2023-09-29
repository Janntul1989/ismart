<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\FrontEnd\HomeController;
use app\http\Controllers\FrontEnd\RegistrationController;
use app\http\Controllers\FrontEnd\DiseaseController;
use app\http\Controllers\FrontEnd\RationController;
use app\http\Controllers\FrontEnd\TokenController;
use app\http\Controllers\FrontEnd\alert_boxController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/',[HomeController::class, 'index']);
Route::get('/', function () {
    return view('FrontEnd.Home');
});

Route::get('/Registration', function () {
    return view('FrontEnd.Registration');
});


Route::get('/Disease', function () {
    return view('FrontEnd.Disease');
});


Route::get('/Ration', function () {
    return view('FrontEnd.Ration');
});

Route::get('/Token',function()
{
 return view('FrontEnd.Token');
});

Route::get('/alert_box', function () {
    return view('FrontEnd.alert_box');
});
Route::get( '/login',[AuthController::class,'index']);
Route::post( '/login',[AuthController::class,'login']);
Route::get( '/logout',[AuthController::class,'logout']);
Route::post( '/Registration',[AuthController::class, 'Registration'])->name('Registration');
