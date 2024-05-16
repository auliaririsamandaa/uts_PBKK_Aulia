<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/iventori', function () {
    return view('iventori');
});

Route::get('/clear', function () {
    return view('clear');
});