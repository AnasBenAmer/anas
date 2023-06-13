<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplexController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\advertisementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!++
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Routes for complexs
Route::get('complexs',[ComplexController::class,'index'])->name('complex.index');
Route::get('complexs/{complex}/show',[ComplexController::class,'show'])->name('complex.show');
Route::get('complex/create',[ComplexController::class,'create'])->name('complex.create');
Route::post('complex/store', [ComplexController::class, 'store'])->name('complex.store');
Route::delete('complex/{complex}', [ComplexController::class, 'destroy'])->name('complex.destroy');
Route::get('complex/{complex}/edit', [ComplexController::class, 'edit'])->name('complex.edit');
Route::patch('complex/{complex}', [ComplexController::class, 'update'])->name('complex.update');
// Routef for building
Route::get('complex/{complex}/building{building}', [BuildingController::class, 'show'])->name('building.show');
Route::delete('complex/{complex}/building/{building}', [BuildingController::class, 'destroy'])->name('building.destroy');
Route::get('complex/{complex}/building/create',[BuildingController::class,'create'])->name('building.create');
Route::post('complex/{complex}/building/create',[BuildingController::class,'store'])->name('building.store');

Route::get('complex/{complex}/building/{building}/edit',[BuildingController::class,'edit'])->name('building.edit');

Route::patch('complex/{complex}/building/{building}',[BuildingController::class,'update'])->name('building.update');

//router for advertisements


//////////////////
Route::get('/moadal',function(){
    return view('anas');
} );
Route::get('/attions',function(){
    return view('attions.index');
} );
//show
Route::get('complex/{complex}/building{building}/room/{room}', [RoomController::class, 'show'])->name('room.show');
//create
Route::get('complex/{complex}/building/{building}/room/create' ,[RoomController::class,'create'])->name('room.create');
Route::post('complex/{complex}/building/{building}/room/create',[RoomController::class,'store'])->name('room.store');
//edit
Route::get('complex/{complex}/building/{building}/room/{room}/edit',[RoomController::class,'edit'])->name('room.edit');
Route::patch('complex/{complex}/building/{building}/room/{room}',[RoomController::class,'update'])->name('room.update');
//delete
Route::delete('complex/{complex}/building/{building}/room/{room}', [RoomController::class, 'destroy'])->name('room.destroy');
//show
Route::get('complex/{complex}/building{building}/room/{room}/student/{student}', [StudentController::class, 'show'])->name('student.show');
//create
Route::get('complex/{complex}/building/{building}/room/{room}/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('complex/{complex}/building/{building}/room/{room}/student/create',[StudentController::class,'store'])->name('student.store');
//edit
Route::get('complex/{complex}/building/{building}/room/{room}/student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::patch('complex/{complex}/building/{building}/room/{room}/student/{student}/edit',[StudentController::class,'update'])->name('student.update');
//delete
Route::delete('complex/{complex}/building/{building}/room/{room}/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
//Router for adversitment
Route::get('/advertisements/create',[advertisementController::class,'index'])->name('advertisements.create');

Route::post('/advertisements/create',[advertisementController::class,'store'])->name('advertisement.store');


require __DIR__.'/auth.php';
