<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

/*
    GET /projects (index)

    GET /projects/create (create)

    GET /projects/1 (show)

    POST /projects (store)

    GET /projects/1/edit (edit)

    PATCH /projects/1 (update)

    DELETE /projects/1 (delete)
*/

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
