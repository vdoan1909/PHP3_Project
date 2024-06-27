<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'Default App Name') }}</title>
</head>

<body>
    <h1>PH33201</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
