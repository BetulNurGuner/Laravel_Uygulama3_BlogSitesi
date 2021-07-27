

@extends(
    'front.layouts.master'
)
@section('title')
    Anasayfa
@endsection
<!-- @section('title','Anasayfa') seklinde de yazılabilir -->


@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    @include('front.widgets.categoryWidget')
                <div class="col-md-9 col-lg-8 col-xl-7">
                    @include('front.widgets.articlelist')
                    <!--widgetslardan articlelist olanı çağırdım. Hem category.blade.php de hem homepage.blade.php de aynı şekilde listeleniyor article lar
                    o yüzden kod tekrarı yapmamak için widget yaptım articlelist i. -->
                </div>
@endsection
        