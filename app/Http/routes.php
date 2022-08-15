<?php
Route::get('/boards', 'BoardController@index');
Route::post('/board', 'BoardController@store');
Route::delete('/board/{board}', 'BoardController@destroy');