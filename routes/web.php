<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);