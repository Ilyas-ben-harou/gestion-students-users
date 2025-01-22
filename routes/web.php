<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
})->name('welcome');

Route::get("/users",[userController::class,'show'])->name('users.users');
Route::get("/user/{id}",[userController::class,'detail'])->where('id','\d+')->name('user.detail');

Route::get("/etudiants",[EtudiantController::class,'showEtudiants'])->name('etudiants.etudiants');
Route::get("/etudiant/{id}",[EtudiantController::class,'detail'])->where('id','\d+')->name('etudiants.detail');
Route::get("/etudiants/create",[EtudiantController::class,'create'])->name('etudiants.create');
Route::post("/etudiants/store",[EtudiantController::class,'store'])->name('etudiants.store');
Route::get('/etudiants/delete/{id}', [EtudiantController::class, 'delete'])->name('etudiants.delete');

Route::get('/etudiant/login', [LoginController::class,'show'])->name('etudiant.login');
Route::post('/etudiant/login', [LoginController::class,'login'])->name('etudiant.login');