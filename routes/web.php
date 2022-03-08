<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'index']);
Route::post('/thanks', [InquiryController::class, 'create']);
Route::get('/thanks', [InquiryController::class, 'review']);