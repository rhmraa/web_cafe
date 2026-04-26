<?php

use Illuminate\Support\Facades\Route;


Route::get('/beranda', function () {
    return view('cafe.beranda');
});

Route::get('/tentang', function () {
    return view('cafe.tentang');
});

Route::get('/menu', function () {
    return view('cafe.menu');
});

Route::get('/spesial', function () {
    return view('cafe.spesial');
});

Route::get('/galerireservasi', function () {
    return view('cafe.galerireservasi');
});