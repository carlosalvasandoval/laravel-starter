<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $clientRole = Role::where('name', 'client')->first();
        $admin = User::create([
            'name' => 'admin',
            'email' => 'carlos.alva.sandoval@gmail.com',
            'password' => bcrypt('1234')
        ]);
        $client = User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $admin->role()->associate($adminRole)->save();
        $client->role()->associate($clientRole)->save();
    }
}
