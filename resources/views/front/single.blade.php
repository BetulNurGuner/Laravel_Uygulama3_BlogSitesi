

@extends(
    'front.layouts.master'
)
@section('title',$article->title) 
@section('bg',$article->image)  <!-- Background image için -->

<!--
@section('title')
    Anasayfa
@endsection
-->



@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    @include('front.widgets.categoryWidget')
                <div class="col-md-9 mx-auto">
                    <!-- {{ $article->content }} -->
                    {!! $article->content !!}

                <br> <br>
                    <span class="text-danger">Okuma sayısı: <b>{{ $article->hit }} </b> </span>
                </div>
            
@endsection
        