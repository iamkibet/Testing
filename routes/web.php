<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/listings', [ListingController::class, 'index']);


Route::get('/', function () {
    return view('home', [
        'listings' => Listing::all()
    ]);
});




//create form
Route::get(
    '/listings/create',
    [ListingController::class, 'create']
)->middleware('auth');

//store listings

Route::post('/listings', [ListingController::class, 'store']);


//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//manage listings
Route::get('/dashboard', [ListingController::class, 'dashboard'])->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/about', function () {
    return view('about', [
        'listings' => Listing::all()
    ]);
});

//show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);


//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
