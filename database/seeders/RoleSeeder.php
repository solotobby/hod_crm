<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'system_admin']);
        Role::create(['name' => 'senior_pastor']);
        Role::create(['name' => 'head_of_ministries']);
        Role::create(['name' => 'pastor']);
        Role::create(['name' => 'director']);
        Role::create(['name' => 'hods']);
        Role::create(['name' => 'worker']);
        Role::create(['name' => 'member']);
        Role::create(['name' => 'user']);
    }
}
