<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Default App Name') }}</title>
</head>

<body>
    <h1>PH33201</h1>

    {{-- Cau 2 --}}
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

    <hr>

    {{-- Cau 3 --}}
    <h3>{{ $model2 }}</h3>

    <hr>

    {{-- Cau 4 --}}
    <table border="1">
        <tr>
            <th>ID NGUOI DUNG</th>
        </tr>

        @foreach ($model3 as $item3)
            <tr>
                <td>{{ $item3 }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 5 --}}
    <h3>TUOI LON NHAT</h3>
    <table border="1">
        <tr>
            <th>Ten</th>
            <th>Tuoi</th>
        </tr>

        @foreach ($model4 as $item4)
            <tr>
                <td>{{ $item4->name }}</td>
                <td>{{ $item4->tuoi }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 6 --}}
    <h3>TUOI NHO NHAT</h3>
    <table border="1">
        <tr>
            <th>Ten</th>
            <th>Tuoi</th>
        </tr>

        @foreach ($model5 as $item5)
            <tr>
                <td>{{ $item5->name }}</td>
                <td>{{ $item5->tuoi }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 7 --}}
    Phòng ban 'Ban giám hiệu' có:
    <b>{{ $model6 }}</b> nguoi dung

    <hr>

    {{-- Cau 8 --}}
    <table border="1">
        <tr>
            <th>DANH SACH TUOI</th>
        </tr>

        @foreach ($model7 as $item7)
            <tr>
                <td>{{ $item7 }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 9 --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($model8 as $item8)
            <tr>
                <td>{{ $item8->id }}</td>
                <td>{{ $item8->name }}</td>
                <td>{{ $item8->email }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 10 --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($model9 as $item9)
            <tr>
                <td>{{ $item9->id }}</td>
                <td>{{ $item9->name }}</td>
                <td>{{ $item9->email }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 11 --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($model10 as $item10)
            <tr>
                <td>{{ $item10->id }}</td>
                <td>{{ $item10->name }}</td>
                <td>{{ $item10->tuoi }}</td>
                <td>{{ $item10->email }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- Cau 12 --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($model11 as $item11)
            <tr>
                <td>{{ $item11->id }}</td>
                <td>{{ $item11->name }}</td>
                <td>{{ $item11->tuoi }}</td>
                <td>{{ $item11->email }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
