<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $roleAdmin =  Role::create(['name' => 'admin']);
        $roleOperator = Role::create(['name' => 'operador']);
        $userOperator = User::factory()->create([
            'name' => "operario",
            'email' => 'usuariooperario@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $userAdmin = User::factory()->create([
            'name' => "antony",
            'email' => 'usuarioadmin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $userAdmin->assignRole($roleAdmin);
        $userOperator->assignRole($roleOperator);
    }
}
