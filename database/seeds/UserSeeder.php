<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name'=>'Manager', 'email'=>'manager@gmail.com', 'password'=>bcrypt('manager'), 'roleid'=>'1', 'gender'=>'male', 'dob'=>'2000-12-06', 'address'=>'Jl. Tanah Tinggi 4 Gang 10 No.3'],
        ]);
    }
}
