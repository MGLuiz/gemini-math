<?php

use GMath\Http\Route;

Route::post('/solveImageApi', 'GeminiApiController@solveImage');
Route::post('/solveTextApi', 'GeminiApiController@solveText');
Route::post('/chatVrTeacher', 'GeminiApiController@chatVrTeacher');

?>