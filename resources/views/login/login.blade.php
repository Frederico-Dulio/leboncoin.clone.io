<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('login.css') }}">

    <title>Login</title>
</head>

<body>
    <nav>
        <ul><li><a href="{{ route('index') }}" >leboncoin</a></li></ul>
    </nav>

    <div class="cont">
        <form class="form sign-in" action="{{ route('login') }}" method="POST">
            <h2>Welcome</h2>
            @csrf
            <label>
                <span>Email</span>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus />
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required autocomplete="current-password" />
            </label>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                <p class="forgot-pass">Forgot password?</p>
            </a>
        @endif
            <button type="submit" class="submit">Sign In</button>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form class="form sign-up" action="{{ route('register') }}" method="POST">
                <h2>Create your Account</h2>
                @csrf
                <label>
                    <span>Name</span>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="{{ old('email') }}" required />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" required autocomplete="new-password" />
                </label>
                <button type="submit" class="submit">Sign Up</button>

            </form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>

</html>
