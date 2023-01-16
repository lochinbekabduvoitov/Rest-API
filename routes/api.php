<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::apiResource('class', SclassController::class);
Route::apiResource('subject', SubjectController::class);
Route::apiResource('section', SectionController::class);
Route::apiResource('student', StudentController::class);

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login',[ AuthController::class, 'login']);
    Route::post('logout', [AuthController::class ,'logout']);
    Route::post('refresh', [AuthController::class ,'refresh']);
    Route::post('me',[ AuthController::class , 'me']);
    Route::post('register',[ AuthController::class , 'register']);

});
