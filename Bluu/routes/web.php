<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ponemos el nombre de la funcion en el controlador en este caso inicio
Route::get('/', 'PagesController@inicio')->name('welcome');

//Route::get('fotosuno/{numero?}', function($numero='sin numero'){
  //  return 'estas en la pagina de fotos '.$numero;
    //para que el numero sea una opcion debemos añadir un
    //? al final de la variable, esto en la ruta ademas asignar el valor de la funcion
    //eb este casi el array es cuando no hay numero

//}) ->where('numero', '[0-9]+');
// aqui delimitamos el id o numero a solo numeros jaja

//Route::view('galeria', 'fotos',['numero'=>125]);
//url galeria, el segundo es el nombre del archivo que contiene la vista

Route::get('fotos', 'PagesController@fotos')->name('foto');
Route::get('blog','PagesController@blog')->name('noticias');;

    //para pasar parametro colocamos /{nombre}
    //esto para que usando ignacio vaya a la ruta de ignacio este se recibe en function
    Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


