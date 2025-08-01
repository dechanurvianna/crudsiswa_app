<?php

use Illuminate\Support\Facades\Route;

Route::get('siswa/create', function () {
    return view('siswa.create');
});
Route::get('/', function () {
    return view('siswa.index');
});
Route::postt('/siswa/store', function (Request $request) {
   // lakukan validasi data

   // siapkan data yang akan di masukkan ke dalam tabel user

   // simpan data ke dalam tebale user
});