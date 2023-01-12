<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Publisher;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return "Hello World!";
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix" => "/book"], function(){
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/detail/{book}', [BookController::class, 'show']);
});

Route::group(["prefix" => "/publisher"], function(){
    Route::get('/publisher', [PublisherController::class, 'index']);
    Route::get('/detail_publisher/{publishers}', [PublisherController::class, 'show']);
});

Route::group(["prefix" => "/register"], function(){
    Route::get('/all', [RegisterController::class, 'index']);
    Route::get('/create', [RegisterController::class, 'create']);
    Route::post('/add', [RegisterController::class, 'store']);
});