<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\controll;
use App\Models\customer;


Route::get('/',[controll::class, 'index']);

Route::get('/registration', [controll::class, 'registration'])->name('customer.register.form');
Route::post('/registration', [controll::class, 'register']);

/*
Route::get('/customer', function(){
    $customers = customer::all();

    print_r($customers->toArray());
});
*/

Route::get('/view', [controll::class, 'view']);

Route::get('/removeRegister/{id}', [controll::class, 'removeRegister'])->name('register.remove');