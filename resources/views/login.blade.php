<body>
    <form action=" {{ route('login') }}" method="post">
        @csrf

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <p style="color: red;">{{ $message}}</p>
        @enderror

        <label>Пароль</label>
        <input type="password" name="password" required> 
        @error('password')
            <p style="color: red;">{{ $message}}</p>
        @enderror
        <label>
            <input type="checkbox" name="remember"> Запомнить меня
        </label>

        <button type="submit">Войти</button>
    </form>
</body>

<p>Нет аккаунта? <a href="{{ route('registerForm') }}">Зарегистрироваться</a></p>