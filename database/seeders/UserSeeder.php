<?php

namespace Database\Seeders;

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
        //
        $roles = [
            [
                'id' => 1,
                'nom' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'id' => 2,
                'nom' => 'Technicien',
                'slug' => 'technicien',
            ],
        ];
        DB::table('roles')->insert($roles);
        $user = [
            [
                'id' => 1,
                'name' => 'FONTAINE',
                'firstname'=>'Baptiste',
                'email' => 'baptisteftn@gmail.com',
                'password' => 'root',
                'role_id' => 1,
            ],
        ];
        DB::table('users')->insert($user);
    }
}
