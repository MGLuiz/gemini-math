<?php

use GMath\Http\Route;

Route::get('/', 'HomeController@solveImage');
Route::get('/solveText', 'HomeController@solveText');

?>