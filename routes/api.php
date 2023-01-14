<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;

Route::apiResource('class', SclassController::class);
Route::apiResource('subject', SubjectController::class);

