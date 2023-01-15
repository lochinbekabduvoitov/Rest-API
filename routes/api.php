<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;

Route::apiResource('class', SclassController::class);
Route::apiResource('subject', SubjectController::class);
Route::apiResource('section', SectionController::class);

