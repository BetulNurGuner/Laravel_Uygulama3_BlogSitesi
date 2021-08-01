<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//veritabanı bağlantısı olduğun için DB kullandığımızı belirt.

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Betül Güner',
            'email'=>'betul@gmail.com',
            'password'=>bcrypt(123456),
        ]);

    }
}
