    <?php
    use App\Http\Controllers\EmployeeController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AttendanceController;
    use App\Http\Controllers\RosterController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;

// Auth / Resiger / login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);
});


    





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/rosters', [RosterController::class, 'index']);

Route::get('/attendances', [AttendanceController::class, 'index']);

Route::get('/salary', [SalaryController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);

Route::get('/roles', [RoleController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);

