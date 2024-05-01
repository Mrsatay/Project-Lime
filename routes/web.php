<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\UmkmController;
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



route::get('/home',[TemplateController::class,'index'])->name('home');

// User
route::get('/signin',[MasukController::class, 'SignIn'])->name('login'); // untuk Sign In
route::get('/signup',[MasukController::class, 'SignUp'])->name('register'); // untuk Sign Up
route::post('/user/store',[MasukController::class, 'store'])->name('user.store'); // untuk Store ke Database

// Acara
route::get('/acara/manage',[AcaraController::class,'manage']); // acara bagian manage
route::get('/acara/view',[AcaraController::class,'view'])->name('acara.view'); // melihat acara dari POV warga
route::get('/create',[AcaraController::class,'create'])->name('acara.create');
route::post('/store',[AcaraController::class,'store'])->name('acara.store');

// UMKM
route::get('/umkm/register', [UmkmController::class, 'register'])->name('umkm.register');

// Read Citizen
route::get('/citizen', [CitizenController::class, 'index'])->name('citizen.index');
route::get('/citizen/rt', [CitizenController::class, 'rt'])->name('citizen.rt');
route::get('/citizen/rumah', [CitizenController::class, 'rumah'])->name('citizen.rumah');
route::get('/citizen/kk', [CitizenController::class, 'kk'])->name('citizen.kk');
route::get('/citizen/organisasi', [CitizenController::class, 'organisasi'])->name('citizen.organisasi');
route::get('/citizen/warga', [CitizenController::class, 'warga'])->name('citizen.warga');

// Create Citizen 
route::get('/citizen/create_warga', [CitizenController::class, 'create_warga'])->name('citizen.create_warga');
route::get('/citizen/create_rt', [CitizenController::class, 'create_rt'])->name('citizen.create_rt');
route::get('/citizen/create_rumah', [CitizenController::class, 'create_rumah'])->name('citizen.create_rumah');
route::get('/citizen/create_kk', [CitizenController::class, 'create_kk'])->name('citizen.create_kk');
route::get('/citizen/create_organisasi', [CitizenController::class, 'create_organisasi'])->name('citizen.create_organisasi');
route::get('/citizen/create_warga', [CitizenController::class, 'create_warga'])->name('citizen.create_warga');

// Update Citizen
route::get('/citizen/update_warga', [CitizenController::class, 'update_warga'])->name('citizen.update_warga');
route::get('/citizen/update_rt', [CitizenController::class, 'update_rt'])->name('citizen.update_rt');
route::get('/citizen/update_rumah', [CitizenController::class, 'update_rumah'])->name('citizen.update_rumah');
route::get('/citizen/update_kk', [CitizenController::class, 'update_kk'])->name('citizen.update_kk');
route::get('/citizen/update_organisasi', [CitizenController::class, 'update_organisasi'])->name('citizen.update_organisasi');
route::get('/citizen/update_warga', [CitizenController::class, 'update_warga'])->name('citizen.update_warga');

// Delete Citizen
route::delete('/citizen/delete_warga', [CitizenController::class, 'delete_warga'])->name('citizen.delete_warga');
route::delete('/citizen/delete_rt', [CitizenController::class, 'delete_rt'])->name('citizen.delete_rt');
route::delete('/citizen/delete_rumah', [CitizenController::class, 'delete_rumah'])->name('citizen.delete_rumah');
route::delete('/citizen/delete_kk', [CitizenController::class, 'delete_kk'])->name('citizen.delete_kk');
route::delete('/citizen/delete_organisasi', [CitizenController::class, 'delete_organisasi'])->name('citizen.delete_organisasi');
route::delete('/citizen/delete_warga', [CitizenController::class, 'delete_warga'])->name('citizen.delete_warga');


