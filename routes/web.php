<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AssetRequestController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetAssignmentController;
use App\Http\Controllers\AssignedAssetController;
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

//user routes
Route::controller(UserController::class)->group(function() {
    Route::get('/', 'login')->name('login-page');

});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Admin Dashboard Routes
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    // Authenticated User Routes
    Route::controller(UserController::class)->group(function () {
        Route::get('create-user', 'create')->name('create-user')->middleware('can:create-users');
        Route::post('store-user', 'store')->name('store-user')->middleware('can:create-users');
        Route::get('user-list', 'index')->name('user-list')->middleware('can:view-users');
        Route::delete('/users/{user}', 'destroy')->name('users.destroy')->middleware('can:delete-users');
        Route::put('/users/{id}', 'update')->name('users.update')->middleware('can:edit-users');
    });

    // Department Routes
    Route::controller(DepartmentController::class)->group(function () {
        Route::get('create-department', 'create')->name('create-department')->middleware('can:create-departments');
        Route::post('store-department', 'store')->name('store-department')->middleware('can:create-departments');
        Route::get('department-list', 'index')->name('department-list')->middleware('can:view-departments');
    });

    // Asset Request Routes
    Route::controller(AssetRequestController::class)->group(function () {
        Route::get('asset-request', 'create')->name('asset-request')->middleware('can:request-assets');
        Route::post('store-asset-request', 'store')->name('store-asset-request')->middleware('can:request-assets');
        Route::get('asset-request-list', 'index')->name('asset-request-list')->middleware('can:view-asset-requests');
    });

    // Position Routes
    Route::controller(PositionController::class)->group(function () {
        Route::get('create-position', 'create')->name('create-position')->middleware('can:create-positions');
        Route::post('store-position', 'store')->name('store-position')->middleware('can:create-positions');
        Route::get('position-list', 'index')->name('position-list')->middleware('can:view-positions');
    });

    // Category Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('create-category', 'create')->name('create-category')->middleware('can:create-categories');
        Route::post('store-category', 'store')->name('store-category')->middleware('can:create-categories');
        Route::get('category-list', 'index')->name('category-list')->middleware('can:view-categories');
    });

    // Type Routes
    Route::controller(TypeController::class)->group(function () {
        Route::get('create-type', 'create')->name('create-type')->middleware('can:create-types');
        Route::post('store-type', 'store')->name('store-type')->middleware('can:create-types');
        Route::get('type-list', 'index')->name('type-list')->middleware('can:view-types');
    });

    // Manufacturer Routes
    Route::controller(ManufacturerController::class)->group(function () {
        Route::get('create-manufacturer', 'create')->name('create-manufacturer')->middleware('can:create-manufacturers');
        Route::post('store-manufacturer', 'store')->name('store-manufacturer')->middleware('can:create-manufacturers');
        Route::get('manufacturer-list', 'index')->name('manufacturer-list')->middleware('can:view-manufacturers');
    });

    // Supplier Routes
    Route::controller(SupplierController::class)->group(function () {
        Route::get('create-supplier', 'create')->name('create-supplier')->middleware('can:create-suppliers');
        Route::post('store-supplier', 'store')->name('store-supplier')->middleware('can:create-suppliers');
        Route::get('supplier-list', 'index')->name('supplier-list')->middleware('can:view-suppliers');
    });

    // Assets Routes
    Route::controller(AssetController::class)->group(function () {
        Route::get('create-asset', 'create')->name('create-asset')->middleware('can:create-assets');
        Route::post('store-asset', 'store')->name('store-asset')->middleware('can:create-assets');
        Route::get('asset-list', 'index')->name('asset-list')->middleware('can:view-assets');
    });

    // Asset Assignment Routes
    Route::controller(AssetAssignmentController::class)->group(function () {
        Route::get('assign-asset', 'create')->name('assign-asset');
    });

    // Assigned Assets Routes
    Route::controller(AssignedAssetController::class)->group(function () {
        Route::get('assigned-asset', 'index')->name('assigned-asset')->middleware('can:view-assigned-assets');
    });
});
