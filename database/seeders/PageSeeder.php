<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//veritabanı bağlantısı olduğun için DB kullandığımızı belirt.
use Illuminate\Support\Str;
//str_slug için

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach($pages as $page)
        {
            $count++;
            DB::table('pages')->insert
            (
                [
                    'title'=>$page,
                    'slug'=>Str::slug($page,"-"),
                    'image'=>'https://pbs.twimg.com/media/E6r0iwfWQAUhtnM.jpg',
                    
                    'content'=>'The Institute of Electrical and Electronics Engineers ya da kısaca IEEE 
                                (Türkçe: Elektrik ve Elektronik Mühendisleri Enstitüsü), elektrik, elektronik, 
                                bilgisayar, otomasyon, telekomünikasyon ve diğer birçok alanda, mühendislik teori ve 
                                uygulamalarının gelişimi için çalışan, kâr amacı olmayan, dünyanın önde gelen teknik organizasyonudur.',


                    'order'=>$count,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]
            );
        }
    }
}
