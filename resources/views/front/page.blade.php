

@extends(
    'front.layouts.master'
)
@section('title',$page->title) 
@section('bg',$page->image)  <!-- Background image için -->




@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    
                <div class="col-md-9 mx-auto">
                    <p>Neden sadece açılış paragrafı için bir yazı yazmak zorunda kaldığımızı merak ediyor olabilirsiniz. 
                        İnternet insanların gittikçe daha aceleci olmasına neden oldu. İnsanlar internette yazılanları okumuyor sadece yazılara göz atıyorlar. 
                        İyi bir açılış paragrafı yazarsanız ilk paragrafı okuduktan sonra göz atmaya devam ederler ancak açılış paragrafı ilgi çekici olmazsa, 
                        iletmek istediğiniz mesajı iletmezse ilk paragraftan sonrasına bakmayacaklardır. Blog Yazılarınıza Daha İyi Açılış Paragrafları Yazmanın
                         7 Yolu sayesinde yazılarınızın daha çok ilgi çektiğini göreceksiniz. 
                    </p>
                </div>
            
@endsection
        