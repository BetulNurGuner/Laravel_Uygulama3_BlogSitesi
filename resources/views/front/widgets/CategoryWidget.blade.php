@isset($categories)
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
    
    <div class="list-group">
        @foreach($categories as $category)
            <a href="#" class="list-group-item">{{ $category->name }} <span class="badge bg-primary float-right ">{{ $category->articleCount() }}</span></a>
        @endforeach
    </div>
    </div>
</div>
@endif