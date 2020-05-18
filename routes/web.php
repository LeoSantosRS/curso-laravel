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

Route::get('/', function () {
    return view('welcome');
});

// Grupos de rotas no laravel

// forma basica:

Route::get('/login', function () {
    return 'login';
})->name('login');

Route::get('/admin/dashboard', function () {
    return 'Home Admin';
})->middleware(['auth']); // controle de acesso no laravel
// utilizando mais de um: ->middleware(['auth'],['exemplo']);

/* // Rotas Nomeadas:
Route::get('/name-url', function () {
    return 'Hey Hey Hey';
})->name('url.name');

Route::get('redirect3', function () {
    return redirect()->route('url.name');
});
*/

// Redirect e View:

/*// redirect linha unica
Route::redirect('/redirect1', 'redirect2');

// redirect utilizando função call back
Route::get('/redirect1', function () {
    return redirect('/redirect2');
});

Route::get('/redirect2', function () {
    return 'redirect2';
});
*/

// url dinamica + parametros opcionais:

/* // Parametros opcionais com parametro opicional
Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produtos: {$idProduct}";
});
*/

/* // Parametros opcionais com parametro obrigatorio
Route::get('/produtos/{idProduct}', function ($idProduct) {
    return "Produtos: {$idProduct}";
});
*/

/* // url dinamica + prefixo
Route::get('/categorias/{flag}/posts', function ($flag) {
    return "posts da categoria: {$flag}";
});
*/

/* // url dinâmica
Route::get('/categorias/{flag}', function ($flag) {
    return "produtos da categoria: {$flag}";
});
*/