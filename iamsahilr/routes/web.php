<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MessageController;

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

//route for the landing page
Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');

Route::delete('/admin/messages/{id}', [MessageController::class, 'destroy'])
     ->name('admin.messages.destroy');

// Route to send message to admin 
Route::post('/send-message', [MessageController::class, 'store'])->name('send.message');
