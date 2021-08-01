<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticable;
//auth işlemleri için admin doğrulanacak. Bu yüzden gerekli kütüphane.
//Ama default user tablosuna göre ayarlı geliyor kütüphanede auth işlemleri. 
//Ben users tablosu değil admin tablosunda doğrulama işlemleri yapacağım. 
//O yüzden config/auth.php de users yazan yerlere admins yazılacak.  

class Admin extends Authenticable  //extends de artık model degil Auth
{
    use HasFactory;

}
