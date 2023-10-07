<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::view('/', 'home');

Route::resource('/author', AuthorController::class);
