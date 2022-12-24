<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Alixame\FormularioContato\Http\Controllers'], function(){
    Route::prefix('api')->group(function () {
        Route::group(['middleware' => ['api']], function () {
            Route::get('teste', 'FormularioContatoController@teste');
        });
    });
});