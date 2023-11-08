<?php

use Illuminate\Support\Facades\Route;

//ruta admin
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
