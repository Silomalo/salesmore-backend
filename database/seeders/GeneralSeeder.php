<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(['logo' => 'logo url', 'phone' => '0712345678', 'email' => 'truecode@gmail.com', 'location' => 'Kisii plaza 2nd Floor Rm. 27 Kisii', 'image' => 'image url', 'about' => 'trucode abouttrucode about']);
        DB::table('projects')->insert(['pid' => 'Item-2022010', 'image' => '/image', 'category' => 'category', 'price' => 24]);

        DB::table('users')->insert(['name' => 'admin','role' => '0', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin@gmail.com')]);
        DB::table('users')->insert(['name' => 'user', 'role' => '1', 'email' => 'user@gmail.com', 'password' => Hash::make('user@gmail.com')]);
    }
}