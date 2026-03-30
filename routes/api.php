    <?php
    
    use Illuminate\Support\Facades\Route;
    
    use App\Http\Controllers\RosterController;
    use App\Http\Controllers\AttendenceController;
    use App\Http\Controllers\DepartmentController;
    use App\Http\Controllers\RoleController;
    use App\Http\Controllers\EmployeeController;
    use App\Http\Controllers\LeaveController;

// Auth / Resiger / login
<<<<<<< HEAD
    // Route::post('/login',    [AuthController::class, 'login']);
    // Route::post('/register', [AuthController::class, 'register']);
=======
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);
});


    


>>>>>>> main

    // Route::middleware('auth:sanctum')->group(function () {
    //     Route::post('/logout', [AuthController::class, 'logout']);
    //     Route::get('/me',      [AuthController::class, 'me']);
    // });


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/rosters', [RosterController::class, 'index']);

Route::get('/attendences', [AttendenceController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);

Route::get('/roles', [RoleController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/leaves', [LeaveController::class, 'index']);