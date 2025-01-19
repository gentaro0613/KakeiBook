<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomebudgetController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

//動画で作ったルーティング

Route::get('/', function () {
    return view('homebudget.index');
});

Route::get('/',[HomebudgetController::class,'index'])->name('index');
Route::post('/post',[HomebudgetController::class,'store'])->name('store');
Route::get('/edit/{id}',[HomebudgetController::class,'edit'])->name('homebudget.edit');
Route::put('/update',[HomebudgetController::class,'update'])->name('homebudget.update');
Route::post('/destroy/{id}',[HomebudgetController::class,'destroy'])->name('homebudget.destroy');

//ここまで

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
