<?php

use Illuminate\Support\Facades\Route;

//ruta admin
Route::get('/admin', function () {

    // session()->flash('swal', [

    //     'icon'=> "error",
    //     'title' => "Oops...",
    //     'text' => "Something went wrong!",
    //     'footer' => '<a href="#">Why do I have this issue?</a>'
    // ]);
    return view('admin.dashboard');
})->name('admin.dashboard');
