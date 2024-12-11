<?php

use App\Http\Controllers\APIcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// ดึงข้อมูลผู้ใช้ทั้งหมด
Route::get('users', [UserController::class, 'index']);

// สร้างผู้ใช้ใหม่
Route::post('users', [UserController::class, 'store']);

// ดึงข้อมูลผู้ใช้ตาม ID
Route::get('users/{id}', [UserController::class, 'show']);

// อัปเดตข้อมูลผู้ใช้ตาม ID
Route::put('users/{id}', [UserController::class, 'update']);

// ลบข้อมูลผู้ใช้ตาม ID
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::patch('users/{id}', [UserController::class, 'patchUpdate']);


// api
Route::controller(APIcontroller::class)->group(function () {
    Route::get('/fetch-posts', 'fetchAPI');
    Route::get('/avatar', 'fetchAPI_avatar');
});
