<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Project (BCC605) - IT TOPUP - Solent University</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front-end/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('front-end/assets/css/main-style.css') }}" rel="stylesheet">

</head>

<body>

@include('front-end.layouts.header')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            @include('front-end.layouts.sidebar')

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('front-end.layouts.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('front-end/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
