<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function (): mixed {
    return Inertia::render('Welcome');
})->name('home');


Route::get('/protected', function() {

    return Inertia::render(component: 'Welcome');
})->middleware(['auth', 'verified', 'password.confirm'])->name('protected');