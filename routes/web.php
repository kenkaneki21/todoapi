<?php
// Route::resource('tasks', 'ToDoController');
Route::get('/', 'ToDoController@index');

Route::get('tasks/{id}/edit', 'ToDoController@edit');

Route::get('tasks/create', 'ToDoController@create');
Route::get('tasks/{id}', 'ToDoController@show');
Route::post('tasks', 'ToDoController@store');

Route::put('tasks/{id}', 'ToDoController@update');
Route::delete('tasks/{id}', 'ToDoController@destroy');