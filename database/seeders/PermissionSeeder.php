<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::factory()->createMany([
            ['name' => 'Administrator'],
            ['name' => 'Editor'],
            ['name' => 'User'],
        ]);
    }
}
