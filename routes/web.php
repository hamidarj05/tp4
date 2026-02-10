<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;

 
Route::get("/" , function () {
    return view("home");
})->name('home');

Route::get("/presentation" , function () {
    return view("presentation");
})->name('presentation');

Route::get("/contact" , function () {
    return view("contact");
})->name('contact');


Route::get('/result', [EtudiantsController::class, 'index'])->name('result');
Route::post('/notes/show', [EtudiantsController::class, 'Rechercher'])->name('rechercher');