<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); });
Route::get('/x', function () {
    return view('app');});

Route::get('/2', function () {
    return view('page2');});

