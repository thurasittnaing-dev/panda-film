<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'yoteshin-admin',
            'fullname' => 'Yoteshin Admin',
            'password' => 'P@ssw0rd',
            'created_by' => 1,
            'updated_by' => null,
            'dev_mode' => true,
        ]);
    }
}
