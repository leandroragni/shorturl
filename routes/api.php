<?php

use Illuminate\Http\Request;

Route::post('/gerar', 'UrlController@gerar');
Route::get('/{enderecoReduzido}', 'UrlController@obterEnderecoCompleto');
