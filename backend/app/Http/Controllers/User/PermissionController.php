<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Listar permisos
     */
    public function index()
    {
        $permissions = Permission::all();

        return ApiResponse::success(
            $permissions,
            'Listado de permisos'
        );
    }

    /**
     * Crear un nuevo permiso
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        $permission = Permission::create([
            'name' => $data['name'],
        ]);

        return ApiResponse::success(
            $permission,
            'Permiso creado correctamente',
            201
        );
    }

    /**
     * Eliminar un permiso
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return ApiResponse::success(
            null,
            'Permiso eliminado correctamente'
        );
    }
}
