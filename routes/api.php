<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DepartmentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/attendences', [AttendenceController::class, 'index']);
Route::get('/employees', [RosterController::class, 'index']);
Route::get('/attendences', [LeaveController::class, 'index']);
Route::get('/salaries', [SalaryController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
