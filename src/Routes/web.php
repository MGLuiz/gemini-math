<?php

use GMath\Http\Route;

Route::get('/', 'HomeController@solveImage');
Route::get('/solveText', 'HomeController@solveText');
Route::get('/vrteacher', 'HomeController@vrTeacher');
Route::get('/about', 'HomeController@about');

?>