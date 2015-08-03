<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;
use App\User;
use App\Decoration;
use App\Background;

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
            'password' => bcrypt('j!zzeverywhere'),
        ]);

		Decoration::create([
			'user_id' => $admin->id
		]);

		Background::create([
			'user_id' => $admin->id
		]);

        $admin->attachRole($adminRole);
    }
}
