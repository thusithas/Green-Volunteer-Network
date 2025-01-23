<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/header', function () {
    return view('header');
});

Route::get('/footer',function(){
    return view ('footer');
});

Route::get('/about',function(){
    return view ('about');
});

Route::get('/organizations',function(){
    return view ('organizations');
});

Route::get('/contact',function(){
    return view ('contact');
});

Route::get('/login',function(){
    return view ('login');
});

Route::get('/volunteerSign',function(){
    return view ('volunteerSign');
});

Route::get('/orgSign',function(){
    return view ('orgSign');
});

Route::get('/profileVol',function(){
    return view ('profileVol');
});

Route::get('/mainSign',function(){
    return view ('mainSign');
});

Route::get('/donation',function(){
    return view ('donation');
});

Route::get('/event',function(){
    return view ('event');
});

Route::get('/volunteers',function(){
    return view ('volunteers');
});

Route::get('/opportunities',function(){
    return view ('opportunities');
});

Route::get('/abc',function(){
    return view ('abc');
});

Route::get('/admin',function(){
    return view ('admin');
});



Route::get('/orgSign', [OrganizationController::class, 'showOrg'])->name('orgSign');
Route::post('/orgSign', [OrganizationController::class, 'storeOrg']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);