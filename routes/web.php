<?php

use App\Http\Controllers\HomeController;
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
);

//store listings

Route::post('/listings', [ListingController::class, 'store']);


//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);


//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/about', function () {
    return view('about', [
        'listings' => Listing::all()
    ]);
});

//show register/create form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);
