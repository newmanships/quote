<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password" id="password">
    </div>

    <div class="checkbox">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>