<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\controll;
use App\Models\customer;


Route::get('/',[controll::class, 'index']);

Route::get('/registration', [controll::class, 'registration']);
Route::post('/registration', [controll::class, 'register']);

/*
Route::get('/customer', function(){
    $customers = customer::all();

    print_r($customers->toArray());
});
*/