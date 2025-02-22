<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $user = User::factory()->create([
            'username' => 'admin12',
            'phone' => '01099991111',
            'name' => 'admin',
            'birth' => '870510',
            'is_agree_push' => 1,
            'email' => 'maryenoch1155@gmail.com'
        ]);
        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
        //$permission = Permission::create(['name' => 'edit articles']);
    }
}
