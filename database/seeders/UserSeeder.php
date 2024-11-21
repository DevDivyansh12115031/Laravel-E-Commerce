<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            'name' => 'Dev Divyansh',
            'email' => 'devdivyansh@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
