<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            array('name' =>'admin','email'=>'admin@gmail.com' ,'password'=>bcrypt('123456789'),'role_id'=>'1')
        ]);
    }
}
