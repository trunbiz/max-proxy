<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
           'name' => 'admin@maxproxy.vn',
           'email' => 'admin@maxproxy.vn',
           'password' => Hash::make('123455')
        ]);
    }
}
