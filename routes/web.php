<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', \App\Livewire\UserTable::class)->name('users');
Route::get('/contact' , \App\Livewire\Contact::class)->name('contact');
Route::get('/users/{user}', \App\Livewire\UserDetail::class)->name('users.show');
