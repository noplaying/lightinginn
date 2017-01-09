<!DOCTYPE html>
<html>
<head>
    <title>兰亭驿-知识精英全景社交平台</title>
    @yield('css')
</head>
<body class="content-animate">


<!-- PRELOADER
==================================================-->
<div class="page-loader">
    <div class="loader">
    </div>
</div>
<div id="top" class="page">
    @include('base.header')

    @yield('content')



    @include('base.footer')
</div>

@yield('js')
</body>
</html>