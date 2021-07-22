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
})->name("login");
Route::post('/auth', "LoginController@__invoke");
Route::middleware('auth')->prefix("tc")->group(function () {
    Route::get("all", "typeChangeGetController@__invoke");
    Route::post("create", "typeChangeCreateController@__invoke");
    Route::post("/update", "typeChangeUpdateController@__invoke");
    Route::get("edit/{typeChange}", "typeChangeRenderController@__invoke");
    Route::get("/delete/{typeChange}", "typeChangeDeleteController@__invoke");
    Route::get("create", function () {
        return view('typeChange.create');
    });
});
