<?php

use App\Tenant\Manager;

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('projects', 'Tenant\ProjectController');


Route::get('/test', function() {
    dd(app(Manager::class)->getTenant());
});