<?php

use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\User\PermissionController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Rutas públicas (no requieren token)
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);

// Rutas protegidas (requieren token Sanctum)
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [ApiAuthController::class, 'logout']);

    Route::get('/me', function (Request $request) {
        $user = $request->user();

        return response()->json([
            'status'  => 'success',
            'message' => 'Usuario autenticado',
            'data'    => [
                'user' => [
                    'id'          => $user->id,
                    'name'        => $user->name,
                    'email'       => $user->email,
                    'roles'       => $user->getRoleNames(), // Spatie
                    'permissions' => $user->getAllPermissions()->pluck('name'),
                ],
            ],
        ]);
    });

    Route::get('/users', [UserController::class, 'index'])->middleware('permission:view-users');
    Route::post('/users', [UserController::class, 'store'])->middleware('permission:create-users');
    Route::post('/users/{user}/permissions', [UserController::class, 'assignPermissions'])->middleware('permission:assign-permissions');


    Route::get('/invoices', [InvoiceController::class, 'index'])->middleware('permission:view-invoices');
    Route::post('/invoices/upload', [InvoiceController::class, 'upload'])->middleware('permission:upload-invoices');

     // Permisos
    Route::get('/permissions', [PermissionController::class, 'index'])->middleware('permission:view-users');
    Route::post('/permissions', [PermissionController::class, 'store'])->middleware('permission:assign-permissions');
    Route::delete('/permissions/{permission}', [PermissionController::class, 'destroy'])->middleware('permission:assign-permissions');

    Route::get('/users/lists', [UserController::class, 'lists']);

});
