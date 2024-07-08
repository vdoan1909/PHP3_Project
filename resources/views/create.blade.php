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
    <div class="container w-50">
        <form class="form-group" action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="mt-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter name">
                @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter email">
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-3">
                <label class="form-label" for="phongban_id">Department</label>
                <select class="form-select" name="phongban_id">
                    <option selected disabled>Department</option>

                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">
                            {{ $department->ten_donvi }}
                        </option>
                    @endforeach
                </select>

                @error('phongban_id')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-3">
                <label class="form-label" for="age">Age</label>
                <input class="form-control" type="number" name="age" placeholder="Enter age">
            </div>

            <div class="mt-3">
                <button class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
</body>

</html>
