<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Default App Name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">{{ env('APP_NAME', 'Default App Name') }} - NGUYEN VAN DOAN</h1>

        <div class="card mt-4">
            <div class="card-body">
                <p class="card-text">Đây là trang hiển thị chi tiết của tin có ID là: <b> {{ $id }} </b></p>
            </div>
        </div>
    </div>

    {{-- 
        http://127.0.0.1:8000/ct/3
       Day la trang hien chi tiet cua tin co id la: 3 
    --}}
</body>

</html>
