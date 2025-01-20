<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
// $name='hello';



Route::get("/hello", function () {
    $name='ilyas';
    $age='20';
    $sexe='M';
    return view('hello',["name"=>$name,"age"=>$age,"sexe"=>$sexe]);
});

$list=[
    '1'=>["name"=>'ilyas',"age"=>20,"sexe"=>'m'],
    '2'=>["name"=>'adam',"age"=>19,"sexe"=>'m'],
    '3'=>["name"=>'kamal',"age"=>21,"sexe"=>'m'],
    '4'=>["name"=>'simo',"age"=>22,"sexe"=>'m'],
];
Route::get("/list",function () use ($list){
    return view('etudiants.list',["list"=>$list]);
})->name('list');

Route::get("/list/{key}",function ($key) use ($list){
    return view('etudiants.detail',["key"=>$list[$key]]);
})->name('detail');

Route::get("/login",function () {
    return view('etudiants.login');
})->name('login');

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
