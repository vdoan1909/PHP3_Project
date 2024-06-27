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

        <table class="table table-bordered table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>MA SV</th>
                    <th>TEN</th>
                    <th>TUOI</th>
                    <th>LOP HOC</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($info as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['age'] }}</td>
                        <td>{{ $item['class'] }}</td>
                    </tr>
                @endforeach --}}

                <tr>
                    <td>{{ $info['id'] }}</td>
                    <td>{{ $info['name'] }}</td>
                    <td>{{ $info['age'] }}</td>
                    <td>{{ $info['class'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
