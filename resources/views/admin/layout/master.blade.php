<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layout.sidebar')

            <div class="col-9 offset-3 p-0 position-relative">
                @include('admin.layout.header')

                @yield('content')

                @include('admin.layout.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
