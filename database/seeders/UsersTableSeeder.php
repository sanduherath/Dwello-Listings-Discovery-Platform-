<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
  User::create([
     'name'=>'Admin User',
     'email'=>'admin@example.com',
     'password'=>Hash::make('password'),
     'role'=>'Admin'
  ]);

  User::create([
     'name'=>'Normal User',
     'email'=>'user@example.com',
     'password'=>Hash::make('password'),
     'role'=>'User'
  ]);
    }
}
