<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$hTWBFLnkgCXPvcPy5gTAOOmsOh.ZDGsv3uLtKlXqVjnmcP5h8Ig7O',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
