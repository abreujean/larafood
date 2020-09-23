<?php

use Illuminate\Support\Facades\Route;

Route::any('admin/plans/search', 'App\Http\Controllers\Admin\PlanController@search')->name('plans.search');
Route::delete('admin/plans/{url}', 'App\Http\Controllers\Admin\PlanController@destroy')->name('plans.destroy');
Route::get('admin/plans/{url}', 'App\Http\Controllers\Admin\PlanController@show')->name('plans.show');
Route::post('admin/plans/', 'App\Http\Controllers\Admin\PlanController@store')->name('plans.store');
Route::get('admin/plans/create', 'App\Http\Controllers\Admin\PlanController@create')->name('plans.create');
Route::get('admin/plans', 'App\Http\Controllers\Admin\PlanController@index')->name('plans.index');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

