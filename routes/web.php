<?php

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/Acerca de', 'about')->name('about');

Route::resource('portfolio','ProjectController')
	->names('projects')
	->parameters(['portfolio'=>'projects']
);

Route::post('contact','MessageController@store')->name('messages.store');
Auth::routes();

//->middleware('auth');
/*Route::get('/portfolio','ProjectController@index')->name('projects.index');
Route::get('/portfolio/create','ProjectController@create')->name('projects.create');
Route::get('/portfolio/{projects}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{projects}','ProjectController@update')->name('projects.update');
Route::post('/portfolio','ProjectController@store')->name('projects.store');
Route::get('/portfolio/{id}','ProjectController@show')->name('projects.show');
Route::delete('/portfolio/{projects}','ProjectController@destroy')->name('projects.destroy');
Route::resource('projects','PortfolioController')->only(['index','show']);
Route::apiResource('projects','PortfolioController');*/


//Route::get('/home', 'HomeController@index')->name('home');

