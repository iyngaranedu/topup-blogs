<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administration Panel - Project (BCC605) - IT TOPUP - Solent University</title>
    <link href="{{ asset('back-end/assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('back-end/assets/css/custom-styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
@include('back-end.layouts.header')

<div id="layoutSidenav">
    @include('back-end.layouts.sidebar')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
        @include('back-end.layouts.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('back-end/assets/js/scripts.js') }}"></script>
</body>
</html>
