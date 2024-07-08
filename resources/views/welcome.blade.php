<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'Default App Name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-primary">THÊM MỚI</a>

        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>DEPARTMENT</th>
                <th>THAO TAC</th>
            </tr>

            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->ten_donvi }}</td>
                    <td>
                        <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning">EDIT</a>
                        <a href="{{ route('users.destroy', $item->id) }}" class="btn btn-danger"  onclick="return confirm('Yet Sure')">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
