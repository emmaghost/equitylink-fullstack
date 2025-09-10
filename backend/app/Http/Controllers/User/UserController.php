<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller; 
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Listar usuarios
     */
    public function index()
    {
        $users = User::with('roles', 'permissions')->get();

        return ApiResponse::success(
            UserResource::collection($users),
            'Listado de usuarios'
        );
    }

    /**
     * Crear un nuevo usuario
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role'     => 'nullable|string|exists:roles,name',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if (!empty($data['role'])) {
            $user->assignRole($data['role']);
        }

        return ApiResponse::success(
            new UserResource($user),
            'Usuario creado correctamente',
            201
        );
    }

    /**
     * Asignar permisos a un usuario
     */
    public function assignPermissions(Request $request, User $user)
    {
        $data = $request->validate([
            'permissions'   => 'required|array',
            'permissions.*' => 'string|exists:permissions,name',
        ]);

        $user->syncPermissions($data['permissions']);

        return ApiResponse::success(
            new UserResource($user->load('roles', 'permissions')),
            'Permisos actualizados'
        );
    }
}
