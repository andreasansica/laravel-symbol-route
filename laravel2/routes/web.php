<?php

use Illuminate\Support\Facades\Route;



Route::get('/pagamenti', 'MainController@pagamenti') -> name = ('pagamenti');

Route::get('/pagamentipending', 'MainController@pagamentipending') -> name = ('pagamentipending');
