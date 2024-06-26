<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>PH33201</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        <tr>
            <td>{{ $model->id }}</td>
            <td>{{ $model->name }}</td>
            <td>{{ $model->email }}</td>
        </tr>
    </table>
</body>

</html>
