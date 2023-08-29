<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user with department ID 1
        $user= User::create([
            'name' => 'mosh gyagenda',
            'email' => 'mosh@epicle.com',
            'department_id' => 1,
            'username' => 'mosh',
            'position_id' => 1,
            'location'=>'Ntinda',
            'contact'=>'0701861283',
            'password' => Hash::make('mosh@2020'),
        ]);

        // Assign the 'Admin' role to the created user
        $user->assignrole('Admin');

        $user= User::create([
            'name' => 'onen sam',
            'email' => 'sam@epicle.com',
            'department_id' => 1,
            'username' => 'sam',
            'position_id' => 1,
            'location'=>'Ntinda',
            'contact'=>'0701861283',
            'password' => Hash::make('sam@2020'),
        ]);

        // Assign the 'Admin' role to the created user
        $user->assignrole('Manager');

        $user= User::create([
            'name' => 'chubaka',
            'email' => 'chubaka@epicle.com',
            'department_id' => 1,
            'username' => 'chubaka',
            'position_id' => 1,
            'location'=>'Ntinda',
            'contact'=>'0701861283',
            'password' => Hash::make('chubaka@2020'),
        ]);

        // Assign the 'Admin' role to the created user
        $user->assignrole('Employee');

        $user= User::create([
            'name' => 'rauben',
            'email' => 'rauben@epicle.com',
            'department_id' => 1,
            'username' => 'rauben',
            'position_id' => 1,
            'location'=>'Ntinda',
            'contact'=>'0701861283',
            'password' => Hash::make('rauben@2020'),
        ]);

        // Assign the 'Admin' role to the created user
        $user->assignrole('Employee');


    }
}
