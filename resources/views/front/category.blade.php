

@extends(
    'front.layouts.master'
)

@section('title',$category->name. 'Kategorisi | '.count($articles).' adet yazı bulundu');


@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    @include('front.widgets.categoryWidget')
                <div class="col-md-9 col-lg-8 col-xl-7">
                    
                    @if(count($articles)>0)

                        @foreach($articles as $article)

                            <!-- Post preview-->
                            <div class="post-preview">
                                <a href="{{ route('single', [$article->getCategory->slug,$article->slug]) }}">
                                    <h2 class="post-title">{{ $article->title }}</h2>
                                    <img src="{{ $article->image }}"/> 
                                    <h3 class="post-subtitle">{{Illuminate\Support\Str::limit($article->content,75) }}</h3>
                                    <!--Tüm metni değil de ilk 50 karakteri göstermesini sağladım. -->
                                </a>
                                <p class="post-meta">
                                    Kategori:
                                    <a href="#!">{{ $article->getCategory->name }}</a>
                                    <!--Article.php de yazdığım getCategory metodu sayesinde ilişki kurdum -->
                                    <!-- {{ $article->created_at }} -->
                                    <span class="float-right">{{ $article->created_at->diffForHumans() }} </span>
                             </p>
                         </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        @endforeach


                         
                    @else
                    <div class="alert alert-danger">
                        <h1>Bu kategoriye ait yazı bulunamadı. </h1>

                    </div>
                    @endif
                    
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
@endsection
        