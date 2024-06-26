<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>PH33201 - NGUYEN VAN DOAN</h1>

    <table border="1">
        <tr>
            <th>MA SV</th>
            <th>TEN SV</th>
            <th>TUOI SV</th>
            <th>LOP HOC</th>
        </tr>

        {{-- @foreach ($info as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['age'] }}</td>
                <td>{{ $item['class'] }}</td>
            </tr>
        @endforeach --}}

        <tr>
            <td>{{$info["id"]}}</td>
            <td>{{ $info['name'] }}</td>
            <td>{{ $info['age'] }}</td>
            <td>{{ $info['class'] }}</td>
        </tr>
    </table>
</body>

</html>
