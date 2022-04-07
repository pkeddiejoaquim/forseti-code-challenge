<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
/*
|--------------------------------------------------------------------------
| Rotas Principais do SISTEMA
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('construcao', function(){
    return view('construcao');
});

Route::group(['middleware'=>'web'], function(){
    Route::match(['get','post'],'/admin', [App\Http\Controllers\AdminController::class,'administrador']);
});


Route::group(['prefix'=>'site'], function(){
    Route::any('/quemsomos', [App\Http\Controllers\site\SiteController::class, 'quemsomos']);
    Route::get('/curriculum/{param?}', function($param= 'pag. do Curriculo'){
        return view('curriculum/100');
    });
});

Route::group(['prefix'=>'juridico'], function(){
    Route::any('/', [App\Http\Controllers\juridico\JuridicoController::class, 'inicio']);
    Route::any('editortexto', [App\Http\Controllers\editor\EditorController::class, 'editortexto']);
    Route::any('/menu_jur', [App\Http\Controllers\juridico\JuridicoController::class, 'menu_jur']);
    Route::any('/listatextos', [App\Http\Controllers\juridico\JuridicoController::class, 'listatextos']);
    Route::any('/peticionar', [App\Http\Controllers\juridico\JuridicoController::class, 'peticionar']);
    Route::get('construcao', [App\Http\Controllers\juridico\JuridicoController::class, 'construcao']);

    Route::any('listatextos/mensagem', [App\Http\Controllers\editor\EditorController::class, 'i_mensagem']);
});

Route::group(['prefix'=>'editor'], function(){
    Route::any('/', [App\Http\Controllers\editor\EditorController::class, 'editortexto']);
    Route::any('/mostratextos', [App\Http\Controllers\editor\EditorController::class, 'mostratextos']);
    Route::any('/gravatexto', [App\Http\Controllers\editor\EditorController::class, 'gravatexto']);
});


Auth::routes();

Route::get('/home',   [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cidade', [App\Http\Controllers\CidadeController::class, 'cidade']);
Route::get('session', [App\Http\Controllers\SessionController::class,'session']);
