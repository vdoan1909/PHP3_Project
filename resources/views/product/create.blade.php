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
    <div class="container w-25">
        <a href="{{ route('products.create') }}" class="btn btn-primary">ADD</a>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">BACK</a>
        <hr>
        <form action="{{ route('products.store') }}" method="POST" class="form-group">
            @csrf

            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name">
            @error('name')
                <p style="color: red"> {{ $message }}</p>
            @enderror
            <br>
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                <option disabled selected>Chon danh muc</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p style="color: red"> {{ $message }}</p>
            @enderror
            <br>

            <label for="price" class="form-label">Price</label>
            <input class="form-control" type="text" name="price">
            @error('price')
                <p style="color: red"> {{ $message }}</p>
            @enderror
            <br>

            <label for="view" class="form-label">View</label>
            <input class="form-control" type="text" name="view">
            @error('view')
                <p style="color: red"> {{ $message }}</p>
            @enderror
            <br>

            <button class="btn btn-success w-100" type="submit">SEND</button>
        </form>
</body>

</html>
