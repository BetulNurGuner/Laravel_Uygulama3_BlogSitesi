

@extends(
    'front.layouts.master'
)

@section('title',$category->name. 'Kategorisi | '.count($articles).' adet yazı bulundu');


@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    @include('front.widgets.categoryWidget')
                <div class="col-md-9 col-lg-8 col-xl-7">
                    
                    @include('front.widgets.articlelist')

                    
                </div>
                
@endsection
        