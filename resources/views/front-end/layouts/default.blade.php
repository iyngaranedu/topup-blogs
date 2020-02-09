<!-- Stored in resources/views/front-end/layouts/default.blade.php -->
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@include('front-end.layouts.header')

<div class="container" style="border: 2px solid aquamarine">
    @yield('content')
</div>

@include('front-end.layouts.sidebar')
@include('front-end.layouts.footer')
</body>
</html>
