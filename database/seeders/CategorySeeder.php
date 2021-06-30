<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//veritabanı bağlantısı olduğun için DB kullandığımızı belirt.
use Illuminate\Support\Str;
//str_slug için

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Eğlence','Bilişim','Gezi','Teknoloji','Sağlık','Spor','Günlük Yaşam'];
        foreach($categories as $category)
        {
            DB::table('categories')->insert
            (
                [
                    'name'=>$category,
                    'slug'=>Str::slug($category,"-"),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]
            );
        }
    }
}
