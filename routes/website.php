<?php

declare(strict_types=1);

use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/',                'home')->name('home');
    Route::get('/about',           'about')->name('about');
    Route::get('/services',        'services')->name('services');
    Route::get('/training',        'training')->name('training');
    Route::get('/gallery',         'gallery')->name('gallery');
    Route::get('/testimonials',    'testimonials')->name('testimonials');
    Route::get('/certifications',  'certifications')->name('certifications');
    Route::get('/contact',         'contact')->name('contact');
    Route::get('/online-course',   'onlineCourse')->name('online-course');
});
