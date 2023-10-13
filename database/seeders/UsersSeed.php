<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user           = new User();

        $user->name     = 'Admin';
        $user->email    = 'admin@admin.com';
        $user->password = 'admin';

        $user->save();
    }
}
