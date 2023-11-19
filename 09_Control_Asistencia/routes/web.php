<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Models\Member;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware('auth')->name('/');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/miembros',function(){
//     return view('miembros.index');
// })->name('miembros.index');

// Route::get('/miembros/create',function(){
//     return view('miembros.create');
// })->name('miembros.create');

//crear ruta para miembros con el controlador
Route::resource('/miembros',MemberController::class)->names('miembros');




