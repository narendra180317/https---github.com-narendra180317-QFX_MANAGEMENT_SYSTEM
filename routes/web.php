<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\branchController;


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

Route::get('/branch', [branchController::class, 'index']);
Route::Post('/create_branch', [branchController::class,'create_branch'])->name('branch.create');
