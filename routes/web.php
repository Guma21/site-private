<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.layouts.wrapper');
    // return view('index');
});
