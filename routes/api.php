<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('invoice', [InvoiceController::class, 'store']);

Route::get('notification', [NotificationController::class, 'index']);
Route::get('notification/read', [NotificationController::class, 'readNotifications']);
Route::get('notification/unread', [NotificationController::class, 'unreadNotifications']);
Route::post('notification/mark-read', [NotificationController::class, 'markFirstOneRead']);
