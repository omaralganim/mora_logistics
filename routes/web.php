<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\AboutUsController;


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

Route::get('/', function () {
    return view('dashboard.dashboard');
});


// Ploicy Routes ##########################
Route::get('policy',[PolicyController::class,'index'])->name('policy.index');
Route::get('policy/{id}',[PolicyController::class,'edit'])->name('policy.edit');
Route::put('policy/{id}',[PolicyController::class,'update'])->name('policy.update');

// About us Routes ##########################
Route::get('aboutus',[AboutUsController::class,'index'])->name('aboutus.index');
Route::get('aboutus/{id}',[AboutUsController::class,'edit'])->name('aboutus.edit');
Route::put('aboutus/{id}',[AboutUsController::class,'update'])->name('aboutus.update');


