<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'EstructurasControl@login');
Route:: get('/valida', 'EstructurasControl@validarLogin');
Route:: get('/detail/{id}', 'crud@show');
Route:: get('/poets', 'crud@poets');
Route:: get('/delete/{id}', 'crud@destroy');
Route:: post('/update', 'crud@update');
Route:: post('/save', 'crud@store');


Route::get('page', function () {
    return view('page');
});
Route::get('menu', function () {
    return view('menu');
});

///SECUENCIALES
Route::get('areaTrapecio/{B?}/{b?}/{h?}', 
            ['uses'=>'EstructurasControl@trapecio',
            'as'=>'Area.Trapecio']); 

Route::get('apotema/{lado?}',
            ['uses'=>'EstructurasControl@apotema',
            'as'=>'Apotema.Cuadrado']);

Route::get('volumenCono/{radio?}/{h?}',
            ['uses'=>'EstructurasControl@volumen',
            'as'=>'Volumen.Cono']);

Route::get('areaTriangulo/{base?}/{h?}',
            ['uses'=>'EstructurasControl@areaT',
            'as'=>'Area.Triangulo']);

Route::get('circulo/{radio?}',
            ['uses'=>'EstructurasControl@circulo',
            'as'=>'Longitud.Circulo']);
///DECISIONES
Route::get('voto','EstructurasControl@voto');

Route::get('regalo', 'EstructurasControl@regalo');

Route::get('calificacion', 'EstructurasControl@calificacion');

Route::get('salario','EstructurasControl@salario' );

Route::get('estacionamiento','EstructurasControl@estacionamiento' );

///CICLOS
Route::get('profe','EstructurasControl@profesor' );
Route::get('posNeg','EstructurasControl@cuenta' );
Route::get('caja','EstructurasControl@dinero' );
Route::get('multiplicacion','EstructurasControl@multiplicacion' );
  

///CRUD
Route::get('ShowUsers', 'crud@index');