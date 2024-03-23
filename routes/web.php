<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.dashboard');
});

Route::middleware(['auth:member'])->group(function(){
    Route::get('/member/dashboard', [DashboardController::class, 'indexMember']);
});

Route::middleware(['auth', 'level:Kasir,Admin'])->group(function(){
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/simpan', [UserController::class, 'store']);
    Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);
    Route::get('/user/{id}/edit', [UserController::class, 'show']);
    Route::post('/user/{id}/update', [UserController::class, 'update']);
    
    Route::get('/member', [MemberController::class, 'index']);
    Route::get('/member/tambah', [MemberController::class, 'create']);
    Route::post('/member/simpan', [MemberController::class, 'store']);
    Route::get('/member/{id}/hapus', [MemberController::class, 'destroy']);
    Route::get('/member/{id}/edit', [MemberController::class, 'show']);
    Route::post('/member/{id}/update', [MemberController::class, 'update']);
    
    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::get('/supplier/tambah', [SupplierController::class, 'create']);
    Route::post('/supplier/simpan', [SupplierController::class, 'store']);
    Route::get('/supplier/{id}/hapus', [SupplierController::class, 'destroy']);
    Route::get('/supplier/{id}/edit', [SupplierController::class, 'show']);
    Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);
    
    Route::get('/sepatu', [SepatuController::class, 'index']);
    Route::get('/sepatu/tambah', [SepatuController::class, 'create']);
    Route::post('/sepatu/simpan', [SepatuController::class, 'store']);
    Route::get('/sepatu/{id}/hapus', [SepatuController::class, 'destroy']);
    Route::get('/sepatu/{id}/edit', [SepatuController::class, 'show']);
    Route::post('/sepatu/{id}/update', [SepatuController::class, 'update']);
    
    Route::get('/penjualan', [PenjualanController::class, 'index']);
    Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
    Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
    Route::get('/penjualan/{id}/hapus', [PenjualanController::class, 'destroy']);
    Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'show']);
    Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
    Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'struk']);
    Route::get('/penjualan/cetak', [PenjualanController::class, 'cetak']);
});

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/member/login', [LoginController::class, 'indexMember'])->name('login-member');
Route::post('/member/PostLogin', [LoginController::class, 'loginMember']);
Route::get('/member/logout', [LoginController::class, 'logoutMember']);

Route::get('/dashboard', [DashboardController::class, 'index']);