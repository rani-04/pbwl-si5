<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route :: get('mahasiswa', function () {
    return view('mahasiswa');
});