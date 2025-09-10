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
            'guard_name' => 'web', 
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
    public function destroy($permission)
    {
        $perm = Permission::where('name', $permission)
            ->where('guard_name', 'web')
            ->firstOrFail();

        // Si el permiso está asignado a algún rol o usuario, no permitir borrar
        if ($perm->roles()->exists() || $perm->users()->exists()) {
            return ApiResponse::error(
            "El permiso '{$permission}' está asignado a usuarios o roles y no puede ser eliminado.",
            422, // código HTTP
            ['permission' => $permission] // detalles opcionales
        );
        }

        $perm->delete();

        return ApiResponse::success(
            null,
            'Permiso eliminado correctamente'
        );
    }
}
