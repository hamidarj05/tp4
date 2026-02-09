<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;

Route::get("/", action: function () {
    return redirect('/notes'); 
});
Route::get('/notes', [EtudiantsController::class, 'index'])->name('all');

Route::post('/notes/show', [EtudiantsController::class, 'Rechercher'])->name('rechercher');