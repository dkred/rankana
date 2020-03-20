<?php
//autenticacion
Auth::routes();

//admin begin
	//Usuarios
Route::resource('/admin/usuarios','UserController');
Route::get('/admin', 'HomeController@admin')->name('home');
	//Productos
Route::resource('/admin/productos','ProductoController');
	//Artistas
Route::resource('/admin/artistas','ArtistaController');
	//Eventos
Route::resource('/admin/eventos','EventoController');
//admin end
//frontend
Route::get('/','HomeController@welcome')->name('welcome');
Route::get('welcome','HomeController@welcome')->name('welcome');
Route::get('nosotros','HomeController@nosotros')->name('nosotros');
Route::get('contacto','HomeController@contacto')->name('contacto');
Route::get('eventos/{evento?}','HomeController@eventos')->name('eventos');
Route::get('productos/{subcategoria?}/{producto?}','HomeController@productos')->name('productos');
Route::get('artistas/{artista?}','HomeController@artistas')->name('artistas');
