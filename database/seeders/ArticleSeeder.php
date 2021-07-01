<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//veritabanı bağlantısı olduğun için DB kullandığımızı belirt.
use Illuminate\Support\Str;
//str_slug için

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'category_id'=>3,
            'title'=>"Sakarya Gezisi",
            'image'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN6SGlHWjeQWGVGqKeZBuofVHhhu5fQw8RmQ&usqp=CAU",
            'content'=>"Sakarya ilinin yer aldığı coğrafi bölge, en eski çağlardan beri çeşitli kavimlerin gelip geçtiği göç yolları üzerinde bulunmaktadır. Yörenin tarih öncesi dönemi hakkında kesin bir bilgi mevcut değildir. Bugüne kadar birkaç kurtarma kazısı ve yüzey araştırması dışında dikkat çekici arkeolojik araştırma yapılmamıştır.",
            'slug'=>str::slug('sakarya-gezisi'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('articles')->insert([
            'category_id'=>4,
            'title'=>"Teknoloji Nedir",
            'image'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN6SGlHWjeQWGVGqKeZBuofVHhhu5fQw8RmQ&usqp=CAU",
            'content'=>"Teknoloji mal veya hizmetlerin üretiminde veya buna yönelik amaçların gerçekleştirilmesinde kullanılan beceriler, yöntemler, işlemler, tekniklerin derlenmesi veya bilimsel araştırmalardır.",
            'slug'=>str::slug('teknoloji-nedir'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('articles')->insert([
            'category_id'=>6,
            'title'=>"Olimpik Okçuluk",
            'image'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN6SGlHWjeQWGVGqKeZBuofVHhhu5fQw8RmQ&usqp=CAU",
            'content'=>"Olimpik yaylar, İngiliz uzun yaylarının günümüz teknoloji ile birleştirilmiş ve nişancılık için özelleştirilmiş versiyonudur. Atış tekniği baz alınan ve diğer yay çeşitlerine geçişte temel alınan yaylardır.",
            'slug'=>str::slug('olimpik-okculuk'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

    }
}
