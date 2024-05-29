<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingPackageController;
use App\Http\Controllers\CoacheController;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PackageSessionController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'showLogin'])->name('login');
Route::post('manager/login',[UserController::class,'login'])->name('user.login');
Route::middleware(['auth'])->group(function(){
Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');
});

Route::middleware(['auth'])->name('manager.')->prefix('manager')->group(function(){

    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/show',[UserController::class,'show'])->name('show');
    Route::get('/create',[UserController::class,'create'])->name('create');
    Route::post('/store',[UserController::class,'store'])->name('store');
    Route::get('/edit',[UserController::class,'edit'])->name('edit');
    Route::put('/update',[UserController::class,'update'])->name('update');
    Route::delete('/delete',[UserController::class,'destroy'])->name('destroy');
});

Route::middleware(['auth'])->name('trainingpackage.')->prefix('package')->group(function(){

Route::get('/index',[TrainingPackageController::class,'index'])->name('index');
Route::get('/create',[TrainingPackageController::class,'create'])->name('create');
Route::post('/store',[TrainingPackageController::class,'store'])->name('store');
Route::get('/edit',[TrainingPackageController::class,'edit'])->name('edit');
Route::put('/update',[TrainingPackageController::class,'update'])->name('update');
Route::delete('/delete',[TrainingPackageController::class,'destroy'])->name('destroy');
});

Route::middleware(['auth'])->name('coache.')->prefix('coache')->group(function(){

Route::get('/index',[CoacheController::class,'index'])->name('index');
Route::get('/create',[CoacheController::class,'create'])->name('create');
Route::post('/store',[CoacheController::class,'store'])->name('store');
Route::get('/edit',[CoacheController::class,'edit'])->name('edit');
Route::put('/update',[CoacheController::class,'update'])->name('update');
Route::delete('/delete',[CoacheController::class,'destroy'])->name('destroy');
});

Route::middleware(['auth'])->name('membershipType.')->prefix('membership')->group(function(){

Route::get('/index',[MembershipTypeController::class,'index'])->name('index');
Route::get('/create',[MembershipTypeController::class,'create'])->name('create');
Route::post('/store',[MembershipTypeController::class,'store'])->name('store');
Route::get('/edit',[MembershipTypeController::class,'edit'])->name('edit');
Route::put('/update',[MembershipTypeController::class,'update'])->name('update');
Route::delete('/delete',[MembershipTypeController::class,'destroy'])->name('destroy');
});

Route::middleware(['auth'])->name('member.')->prefix('member')->group(function(){

Route::get('/index',[MemberController::class,'index'])->name('index');
Route::get('/create',[MemberController::class,'create'])->name('create');
Route::post('/store',[MemberController::class,'store'])->name('store');
Route::get('/edit',[MemberController::class,'edit'])->name('edit');
Route::put('/update',[MemberController::class,'update'])->name('update');
Route::delete('/delete',[MemberController::class,'destroy'])->name('destroy');
});

Route::middleware(['auth'])->name('packagesession.')->prefix('packagesession')->group(function(){

Route::get('/index',[PackageSessionController::class,'index'])->name('index');
Route::get('/create',[PackageSessionController::class,'create'])->name('create');
Route::post('/store',[PackageSessionController::class,'store'])->name('store');
Route::get('/edit',[PackageSessionController::class,'edit'])->name('edit');
Route::put('/update',[PackageSessionController::class,'update'])->name('update');
Route::delete('/delete',[PackageSessionController::class,'destroy'])->name('destroy');
});