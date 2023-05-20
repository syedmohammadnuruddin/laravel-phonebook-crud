<?php

use App\Http\Controllers\phoneBookController;
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


Route::redirect('/','/list');

Route::get('/list',[phoneBookController::class,'index'])->name('contactList');
Route::post('/list/create',[phoneBookController::class,'create'])->name(name: 'createContact');

Route::get('/list/{id}/edit',[phoneBookController::class,'showEdit'])->name('showEdit');
Route::post('/list/{id}/edit',[phoneBookController::class,'edit'])->name('contactEdit');
Route::get('/list/{id}/delete',[phoneBookController::class,'delete'])->name('deleteContact');



