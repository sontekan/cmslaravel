@include('blog.layout.header')
@include('blog.layout.navbar')
    
 <!-- Page content-->
<div class="container mt-5">
<div class="row">
@yield('blog') 
@include('blog.layout.widget')
</div>
</div>
@include('blog.layout.footer')