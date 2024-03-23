<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',App\Livewire\HomeComponent::class);
Route::get('/profile',App\Livewire\ProfileComponent::class);
Route::get('/contact',App\Livewire\ContactComponent::class);
Route::get('/about',App\Livewire\AboutComponent::class);
