<?php
namespace App\Http\Controllers;
use App\Models\Presidente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('presidentes/listar',[PresidenteController::class,'listar'])->name('presidente.listar');
Route::get('presidentes/create',[PresidenteController::class,'create']);
Route::post('presidentes/store',[PresidenteController::class,'store'])->name('presidente.store');
Route::put('presidentes/{presidente}',[PresidenteController::class,'update'])->name('presidente.update');
Route::get('presidentes/{presidente}/editar',[PresidenteController::class,'edit'])->name('presidente.edit');
Route::delete('presidentes/{presidente}',[PresidenteController::class,'destroy'])->name('presidente.destroy');

