@include('template.sidebar')
@include('template.header')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
                    @yield('content')
        </div>
    </div>
</div>
@include('template.footer')