<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', [ImcController::class, 'index'])->name('imc.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('imc.dash');
Route::post('/calculaImc', [ImcController::class, 'calculaimc'])->name('imc.calculaimc');
Route::post('/salvar', [ImcController::class, 'store'])->name('imc.salvar');
Route::put('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('dash.update');
Route::delete('/dashboard/delete/{id}', [DashboardController::class, 'destroy'])->name('dash.delete');
