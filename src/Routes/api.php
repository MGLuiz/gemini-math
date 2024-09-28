<?php

use GMath\Http\Route;

Route::get('/', 'HomeController@index');
Route::post('/a/{id}', 'HomeController@index');

?>