<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentTableController;
use App\Http\Controllers\UserTableController;
use App\Http\Controllers\TeacherTableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[StudentTableController::class ,'index']);
Route::get('/students/create',[StudentTableController::class ,'create']);
Route::post('/students/create',[StudentTableController::class ,'store']);
Route::get('/teachers',[TeacherTableController::class ,'index']);
Route::get('/teachers/create',[TeacherTableController::class ,'create']);
Route::get('/users',[UserTableController::class, 'index']);
Route::get('/users/create',[UserTableController::class, 'create']);
Route::post('/users/create',[UserTableController::class, 'store']);
Route::get('/teachers/{id}/edit',[TeacherTableController::class, 'edit']);
Route::get('/teachers/{id}/delete',[TeacherTableController::class, 'destroy']);
Route::put('/teachers/{id}/edit',[TeacherTableController::class, 'update']);
Route::get('/students/{id}/edit',[StudentTableController::class, 'edit']);
Route::get('/students/{id}/delete',[StudentTableController::class, 'destroy']);
Route::put('/students/{id}/edit',[StudentTableController::class, 'update']);

//Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
