<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//prefix "admin"
Route::prefix('admin')->group(function () {
    //middleware "auth"
    Route::group(['middleware' => ['auth']], function () {
        //route dashboard
        Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
    });
});
