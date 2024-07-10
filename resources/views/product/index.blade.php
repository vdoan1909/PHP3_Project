<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary">ADD</a>

        <form action="{{ route('products.index') }}" method="get" class="form-group w-25">
            @csrf

            <label class="form-label" for="search">Name product</label>
            <input class="form-control" type="text" name="search">
            <button type="submit" class="btn btn-success mt-2">Search</button>
        </form>
        <hr>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>View</th>
                <th>#</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->ctg_name }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->view }}
                    </td>

                    <td>
                        <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('products.destroy', $product->id) }}"
                            onclick="return confirm('Yet sure???')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
