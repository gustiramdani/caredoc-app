<?php

use App\Http\Controllers\Administrator\AdminC;
use App\Http\Controllers\Auth\LoginC;
use App\Http\Controllers\Auth\RegisterC;
use App\Http\Controllers\chatbot\chatbotC;
use App\Http\Controllers\Dashboard\dashboardC;
use App\Http\Controllers\frontend\illness\illnessC;
use App\Http\Controllers\Illness\EmptyIllnessC;
use App\Http\Controllers\Illness\IllnessC as IllnessIllnessC;
use App\Http\Controllers\reservation\reservationC;
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

// FRONTEND
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/email', function () {
    $data = [];
    return view('email.reservasi',compact('data'));
});

Route::prefix('/illness')->group(function () {
    Route::controller(illnessC::class)->group(function(){
        Route::get("/","index")->name('illness.index');
        Route::get("/detail/{id}","detail")->name('illness.detail');
    });
});
Route::prefix('/reservasi')->group(function () {
    Route::controller(reservationC::class)->group(function(){
        Route::post("/","post")->name('reservasi');
    });
});

Route::prefix('/chatbot')->group(function () {
    Route::controller(chatbotC::class)->group(function(){
        Route::post("/","post")->name('chatbot');
    });
});

Route::prefix('/login')->group(function () {
    Route::controller(LoginC::class)->group(function(){
        Route::get("/","index")->name('login.index');
        Route::post("/authenticate","authenticate")->name('login.authenticate');
    });
});

Route::prefix('/register')->group(function () {
    Route::controller(RegisterC::class)->group(function(){
        Route::get("/","index")->name('register.index');
        Route::post("/store","store")->name('register.store');
    });
});
Route::group(["middleware"=>['web','auth'],"as"=>"backend."],function(){

    Route::group(["prefix"=>"/dashboard","as"=>"dashboard."],function(){
        Route::get("/",[dashboardC::class,"index"])->name("index");
    });

    Route::group(["prefix"=>"/administrator","as"=>"administrator."],function(){
        Route::get("/",[AdminC::class,"index"])->name("index");
        Route::get("/form",[AdminC::class,"create"])->name("create");
        Route::post("/action",[AdminC::class,"action"])->name("action");
        Route::get("/delete/{id}",[AdminC::class,"delete"])->name("delete");
    });

    Route::group(["prefix"=>"/illness-data","as"=>"illness."],function(){
        Route::get("/",[IllnessIllnessC::class,"index"])->name("index");
        Route::get("/form",[IllnessIllnessC::class,"create"])->name("create");
        Route::post("/action",[IllnessIllnessC::class,"action"])->name("action");
        Route::delete("/delete/{id}",[IllnessIllnessC::class,"delete"])->name("delete");
    });

    Route::group(["prefix"=>"/empty-illness","as"=>"empty-illness."],function(){
        Route::get("/",[EmptyIllnessC::class,"index"])->name("index");
        Route::delete("/delete/{id}",[EmptyIllnessC::class,"delete"])->name("delete");
    });
});

Route::get('logout',[LoginC::class,"logout"])->name("logout");