<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkControl;

Route::get('/', [LinkControl::class, 'viewindex'])->name('index');
Route::get('/events', [LinkControl::class, 'viewevents'])->name('events');
Route::get('/about', [LinkControl::class, 'viewabout'])->name('about');
Route::get('/contact', [LinkControl::class, 'viewcontact'])->name('contact');
Route::get('/blog', [LinkControl::class, 'viewblog'])->name('blog');
Route::get('/blog1', [LinkControl::class, 'viewblog1'])->name('blog1');
Route::get('/blog2', [LinkControl::class, 'viewblog2'])->name('blog2');

