<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

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

        $admin = User::create([
            'name'=> 'Admin',
            'email' => 'admin@admin.com',
            'password'=> hash("md5",'password')
        ]);

        $csabi = User::create([
            'name'=>'Csabi',
            'email'=>'sallcsa.csaba8@gmail.com',
            'password'=>hash("md5",'password')




        ]);

        $admin->roles()->attach($adminRole);
        $csabi->roles()->attach($authorRole);




    }
}
