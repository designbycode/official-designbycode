<?php

    use App\Http\Controllers\AboutUsPageController;
    use App\Http\Controllers\HomePageController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', HomePageController::class)->name('home');
    Route::get('/about-us', AboutUsPageController::class)->name('about');
