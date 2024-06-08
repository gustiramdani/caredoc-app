<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit administrator']);
        Permission::create(['name' => 'delete administrator']);
        Permission::create(['name' => 'add administrator']);

        Permission::create(['name' => 'edit illness']);
        Permission::create(['name' => 'delete illness']);
        Permission::create(['name' => 'add illness']);

        Permission::create(['name' => 'delete empty illness']);

        $role = Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        User::factory()
        ->count(1)
        ->create()
        ->each(function ($user) {
            $user->assignRole('admin');
        });
    }
}
