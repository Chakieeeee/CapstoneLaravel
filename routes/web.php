<?php

use Illuminate\Support\Facades\Route;
use App\Models\infoArticle;
use App\Models\dateArticle;
use App\Models\roomArticle;
use App\Models\roomArticles;
use App\Http\Controllers\infoController;

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

// Route::post('/infoForm',[infoController::class,'create'])->name('info.create');

Route::get('/booknow',[infoController::class,'booknow'])->name('booknow');
Route::get('/',[infoController::class,'index'])->name('index');
Route::get('/accommodations',[infoController::class,'accommodations'])->name('accommodations');
Route::get('/contacts',[infoController::class,'contacts'])->name('contacts');
Route::get('/events',[infoController::class,'events'])->name('events');
Route::get('/faqs',[infoController::class,'faqs'])->name('faqs');
Route::get('/form',[infoController::class,'form'])->name('form');
Route::get('/availability', [infoController::class, 'displayAvailability'])->name('availability');
Route::get('/availability',[infoController::class,'availability'])->name('availability');




Route::post('/form',[infoController::class,'create'])->name('info.create');
Route::post('/booknow',[infoController::class,'date'])->name('date.create');
Route::post('/availability',[infoController::class,'room'])->name('room.create');



