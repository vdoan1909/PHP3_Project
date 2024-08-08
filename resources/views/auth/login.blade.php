<form action="{{ route('post.login') }}" method="POST">
    @csrf

    Email:
    <input type="text" name="email">
    @error('email')
        <p style="color: red"> {{ $message }} </p>
    @enderror
    <br>

    Password:
    <input type="password" name="password">
    @error('password')
        <p style="color: red"> {{ $message }} </p>
    @enderror
    <br>

    <button type="submit">Login</button>
</form>
