@isset($categories)
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
    
    <div class="list-group">
        @foreach($categories as $category)

            <li class="list-group-item @if(Request::segment(2)==$category->slug) active @endif" >   
                <!--localhost:8000/kategori/gezi için 2 segment var. 1.kategori ve 2.segmentte gezi var bu slug ile kategorinin slug değeri aynıysa onu active mavi renkli yapıyor. -->
                <a href="{{ route('category',$category->slug) }}" class="list-group-item">{{ $category->name }} <span class="badge bg-primary float-right ">{{ $category->articleCount() }}</span></a>
            </li>
            @endforeach
    </div>
    </div>
</div>
@endif