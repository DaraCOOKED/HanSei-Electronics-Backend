<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController; 
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\RosterController; 
use App\Http\Controllers\LeaveController; 

   Route::get('/attendances', [AttendanceController::class, 'index']);

   Route::get('/employees', [EmployeeController::class, 'index']);

   Route::get('/salary', [SalaryController::class, 'index']);

   Route::get('/rosters', [RosterController::class, 'index']);

   Route::get('/leave', [LeaveController::class, 'index']);