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
Route::group(["prefix" => "tc"], function () {
    Route::get("all", "typeChangeGetController@__invoke");
    Route::post("create", "typeChangeCreateController@__invoke");
    Route::get("create", function () {
        return view('typeChange.create');
    });
});
