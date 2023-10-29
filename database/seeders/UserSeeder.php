<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $systemUsers = [
            ['first_name' => 'system', 'last_name'=> 'account', 'email' => 'system@gmail.com', 'phone_number' => '+2348012345678', 'gender' => 'Male', 'password' => bcrypt('2eZV.rpS9:>|xJ3t')],
            ['first_name' => 'Oluwatobi', 'last_name'=> 'Solomon', 'email' => 'solotobby@gmail.com', 'phone_number' => '+447774276007', 'gender' => 'Male', 'password' => bcrypt('solomon001')],
            ['first_name' => 'Ayo', 'last_name'=> 'Arisoloye', 'email' => 'ayo@gmail.com', 'phone_number' => '+2348058532144', 'gender' => 'Male', 'password' => bcrypt('arisoloye')],
        ];

        $systemRole = Role::where('name', 'system_admin')->first();

        foreach($systemUsers as $user){
            
           $user =  User::updateOrCreate($user);
           Profile::create(['user_id' => $user->id]);
           $user->assignRole($systemRole->id);

        }
    }
}
