<?php

use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::get('/settings', function () {
    return view('dashboard.settings');
})->name('dashboard.settings');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('dashboard/settings/update' , [SettingController ::class , 'update'])->name('settings.update');