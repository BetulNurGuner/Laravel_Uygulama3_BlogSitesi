@include('back.layouts.header')
@include('back.layouts.menu')
    @yield('content') <!-- bu araya kendi içeriğim gelecek yield koydum.  -->
<!--bu yield ı bulacağı section tanımla.  -->
    @include('back.layouts.footer')