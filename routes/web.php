<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [studentController::class,'show']);

Route::get('/add_student', function()
{
    return view('add_student');
});

Route::post('/add_data',[studentController::class,'addData']);

Route::get('/edit_data/{id}',[studentController::class,'editData']);
Route::post('/update_data/{id}',[studentController::class,'updateData']);
Route::get('/delete_data/{id}',[studentController::class,'deleteData']);


