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
        User::firstOrCreate([
            'email' => 'jmsbhatta@gmail.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('mohrain@2021'),
            'email_verified_at' => now()
        ]);
    }
}
