    <?php
    use App\Http\Controllers\EmployeeController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AttendanceController;

// Auth / Resiger / login
    Route::post('/login',    [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/me',      [AuthController::class, 'me']);
    });




    //    Employeee
    Route::get('/employees', [EmployeeController::class, 'index']);


    Route::get('/attendances', [AttendanceController::class,'index']);