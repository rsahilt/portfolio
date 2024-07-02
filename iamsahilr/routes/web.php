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

// Route to send message to admin 
Route::post('/send-message', [MessageController::class, 'store'])->name('send.message');




Auth::routes();

// Route to user dashboard upon logging in
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

//Admin Routes
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard')->middleware('auth');

Route::get('/admin/messages', [MessageController::class, 'index'])
    ->name('admin.messages')->middleware('auth');

Route::delete('/admin/messages/{id}', [MessageController::class, 'destroy'])
     ->name('admin.messages.destroy')->middleware('auth');


