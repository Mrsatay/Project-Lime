<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\TemplateController;
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
    return view('welcome');
});

route::get('/home',[TemplateController::class,'index']);
route::get('/signin',[MasukController::class, 'SignIn']); // untuk Sign In
route::get('/signup',[MasukController::class, 'SignUp']); // untuk Sign Up


route::get('/acara/manage',[AcaraController::class,'manage']); // acara bagian manage
route::get('/acara/view',[AcaraController::class,'view'])->name('acara.view'); // melihat acara dari POV warga
route::get('/create',[AcaraController::class,'create'])->name('acara.create');
route::post('/store',[AcaraController::class,'store'])->name('acara.store');




