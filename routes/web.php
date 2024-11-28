<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/1', [\App\Http\Controllers\Auth\Login::class, 'show']);

