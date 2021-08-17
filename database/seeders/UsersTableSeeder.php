<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();

        User::truncate();

        $password = Hash::make('pass');

        $admin = User::create([
            'name'=> 'Admin',
            'email' => 'admin@admin.com',
            'password'=> $password,
        ]);

        $csabi = User::create([
            'name'=>'Csabi',
            'email'=>'sallcsa.csaba8@gmail.com',
            'password'=>$password,
        ]);

        $admin->roles()->attach($adminRole);
        $csabi->roles()->attach($authorRole);




    }
}
