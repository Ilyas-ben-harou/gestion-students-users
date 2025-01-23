<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\userController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
})->name('welcome');

Route::middleware([AuthCheck::class])->group(function() {
    
    Route::get("/users",[userController::class,'show'])->name('users.users');
    Route::get("/user/{id}",[userController::class,'detail'])->where('id','\d+')->name('user.detail');
    
    // show list students
    Route::get("/etudiants", [EtudiantController::class, 'showEtudiants'])->name('etudiants.etudiants');

    Route::get("/etudiant/{student}",[EtudiantController::class,'detail'])->name('etudiants.detail');
    Route::get('/etudiants/delete/{id}', [EtudiantController::class, 'delete'])->name('etudiants.delete');
    Route::get('/etudiants/{student}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
    Route::put('/etudiants/{student}', [EtudiantController::class, 'update'])->name('etudiants.update');
    Route::get("/etudiants/create",[EtudiantController::class,'create'])->name('etudiants.create');
    Route::post("/etudiants/store",[EtudiantController::class,'store'])->name('etudiants.store');
});

// sign in
Route::get("/etudiants/create",[EtudiantController::class,'create'])->name('etudiants.create');
Route::post("/etudiants/store",[EtudiantController::class,'store'])->name('etudiants.store');
// log in
Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.submit');
// log out
Route::get('/logout', [LoginController::class,'logout'])->name('logout');