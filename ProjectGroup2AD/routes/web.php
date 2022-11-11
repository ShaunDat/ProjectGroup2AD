<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\TraineeController;
use App\Http\Controllers\backend\TrainerController;


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
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    
    Route::prefix('trainee')->group(function(){
        Route::get('/',[TraineeController::class, 'trainee'])->name('trainee');
        Route::get('/profile',[TraineeController::class, 'profile'])->name('profile-trainee');
    });



    Route::prefix('trainer')->group(function(){
    Route::get('/',[TrainerController::class, 'trainer'])->name('trainer');
    Route::get('/create', [TrainerController::class,'create'])->name('trainer.create');
    Route::post('/store', [TrainerController::class,'store'])->name('trainer.store');

    });
});
