<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\AuthController;

Route::apiResource('class', SclassController::class);
Route::apiResource('subject', SubjectController::class);
Route::apiResource('section', SectionController::class);
Route::apiResource('student', StudentController::class);

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', AuthController::class);
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
