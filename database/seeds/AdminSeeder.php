<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $admin = User::create([
            'name' => '神',
            'email' => 'god@god.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->attachRole($adminRole);
    }
}
