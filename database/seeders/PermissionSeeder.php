<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::create(['name' => 'can_create_group']);
        // Permission::create(['name' => 'can_edit_group']);
        // Permission::create(['name' => 'can_delete_group']);
        // Permission::create(['name' => 'can_send_notification']);

        // Permission::create(['name' => 'can_create_senior_pastor']);
        // Permission::create(['name' => 'can_edit_senior_pastor']);
        // Permission::create(['name' => 'can_remove_senior_pastor']);

        // Permission::create(['name' => 'can_create_head_of_ministries']);
        // Permission::create(['name' => 'can_edit_head_of_ministries']);
        // Permission::create(['name' => 'can_remove_head_of_ministries']);

        // Permission::create(['name' => 'can_create_pastor']);
        // Permission::create(['name' => 'can_edit_pastor']);
        // Permission::create(['name' => 'can_remove_pastor']);

        // Permission::create(['name' => 'can_create_director']);
        // Permission::create(['name' => 'can_edit_director']);
        // Permission::create(['name' => 'can_remove_director']);

        // Permission::create(['name' => 'can_create_hod']);
        // Permission::create(['name' => 'can_edit_hod']);
        // Permission::create(['name' => 'can_remove_hod']);

        // Permission::create(['name' => 'can_create_worker']);
        // Permission::create(['name' => 'can_edit_worker']);
        // Permission::create(['name' => 'can_remove_worker']);

        // Permission::create(['name' => 'can_create_member']);
        // Permission::create(['name' => 'can_edit_member']);
        // Permission::create(['name' => 'can_remove_member']);

        // Permission::create(['name' => 'can_create_user']);
        // Permission::create(['name' => 'can_edit_user']);
        // Permission::create(['name' => 'can_remove_user']);

        Permission::create(['name' => 'can_create_branch']);
        Permission::create(['name' => 'can_edit_branch']);

    }
}
