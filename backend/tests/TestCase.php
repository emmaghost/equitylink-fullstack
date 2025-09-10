<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Spatie\Permission\PermissionRegistrar;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // Registrar el provider de Spatie
        $this->app->register(\Spatie\Permission\PermissionServiceProvider::class);

        // ✅ Registrar binding directamente con la clase
        $this->app->singleton('permission', PermissionRegistrar::class);

        // Configurar modelos
        $this->app['config']->set('permission.models.permission', \Spatie\Permission\Models\Permission::class);
        $this->app['config']->set('permission.models.role', \Spatie\Permission\Models\Role::class);

        // Migraciones para test
        $this->artisan('migrate', ['--database' => 'sqlite']);
    }
}
