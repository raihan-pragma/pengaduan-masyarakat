<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name' => 'Administrator',
            'email' =>  'admin@role.test',
            'telp' => '085797037633',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');
        
        $user = User::create([
            'name' => 'user',
            'email' =>  'user@role.test',
            'telp' => '0895391007455',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('user');

        $petugas = User::create([
            'name' => 'Petugas',
            'email' =>  'petugas@role.test',
            'telp' => '0895391007455',
            'password' => bcrypt('password')
        ]);

        $petugas->assignRole('petugas');
    }
}
