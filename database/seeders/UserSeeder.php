<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'role_id' => '1',
                'image' => 'storage/user_image/no_image.jpg',
                'phone' => '0322-1436408',
                'password'=> Hash::make('user@user.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'role_id' => '2',
                'image' => 'storage/user_image/no_image.jpg',
                'phone' => '0321-1436408',
                'password'=> Hash::make('admin@admin.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'manager',
                'email' => 'manager@manager.com',
                'role_id' => '3',
                'image' => 'storage/user_image/no_image.jpg',
                'phone' => '0321-1536408',
                'password'=> Hash::make('manager@manager.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
