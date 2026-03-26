<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RosterController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/rosters', [RosterController::class, 'index']);

Route::get('/attendances', [AttendanceController::class, 'index']);

Route::get('/salary', [SalaryController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);

Route::get('/roles', [RoleController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);