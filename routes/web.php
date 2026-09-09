<?php

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

Route::get('/', function () {
    return view('home');
});


// فرض کنیم می‌خواهیم آدرس صفحه ما /new-page باشد
Route::get('/new-page', function () {
    return view('empty'); 
});
// روت صفحه اصلی
Route::get('/', function () {
     return "111";
    return view('home');
})->name('home'); // اینجا اسم روت را گذاشتیم 'home'

// روت صفحه دوم (مقصد)
Route::get('/second-page', function () {
    return view('second');
})->name('second.page'); // اینجا اسم روت را گذاشتیم 'second.page'

Route::get('/contact', function () {
    return view('contact');
})->name('contact.us');