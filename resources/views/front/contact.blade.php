

@extends(
    'front.layouts.master'
)
@section('title','İletişim') 
@section('bg','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiYxeXjSzq5P5Co2IG4LTwZ8Bdwmlnj5L8yw&usqp=CAU')  <!-- Background image için -->


@section('content')

    <!-- Bootstrap de col md ler toplamı 12 olmalı, 3(widget tan gelir)+9 yaptık-->
    @include('front.widgets.categoryWidget')
                <div class="col-md-9 mx-auto">
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                                            
                    @endif

                    <p>Bizimle iletişime geçebilirsiniz!</p>
                        
                            <form method="post" action="{{ route('contact.post') }}">
                                @csrf <!-- FORMDA BUNU UNUTMA -->

                                <div>
                                    <label for="name">Ad Soyad</label>
                                    <input class="form-control" name="name" type="text" value="{{ old('name') }}" placeholder="Ad Soyadınız..." data-sb-validations="required" />
                                    
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div >
                                    <label for="email">Email adresi</label>
                                    <input class="form-control" name="email" type="email" value="{{ old('email') }}" placeholder="Email adresiniz..." data-sb-validations="required,email" />
                                    
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div >
                                    <label for="topic">Konu</label>
                                    
                                    <select class="form-control" name="topic">
                                        <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                                        <option @if(old('topic')=="Destek") selected @endif>Destek</option>
                                        <option @if(old('topic')=="Genel") selected @endif>Genel</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <label>Mesajınız</label>
                                    <textarea name="message" placeholder="Mesajınız..." rows="5" >
                                        {{ old('message') }}
                                    </textarea>
                                </div>
                                <br />
                                
                                <!-- Submit Button-->
                                <button class="btn btn-primary" id="submitButton" type="submit">Gönder</button>
                            </form>
                        
                </div>
            
@endsection
        