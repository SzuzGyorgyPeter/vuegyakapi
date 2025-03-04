<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

//grades
/*
Route::get('/grades', [GradeController::class, 'index'])
    ->name('grades.index');

Route::post('/grades', [GradeController::class, 'store'])
    ->name('grades.store');
*/

Route::apiResource('grades', GradeController::class)
    ->only(['index', 'store'])
    ->missing(function (Request $request){
        return Response::json([
            'data' => null,
            'success' => false,
            'message' => 'Grade not exists'
        ], 404);
    });

/*
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

Route::get('/students/:student', [StudentController::class, 'show'])
    ->name('students.show');
*/

Route::apiResource('students', StudentController::class)
    ->only(['index', 'show'])
    ->missing(function (Request $request){
        return Response::json([
            'data' => null,
            'success' => false,
            'message' => 'Student not exists'
        ], 404);
    });;
