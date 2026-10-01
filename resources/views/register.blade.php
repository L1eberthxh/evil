<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label>login</label>
        <input type="text" name="login" required></input>
        <label>email</label>
        <input type="email" name="email" required></input>
        <label>full_name</label>
        <input type="text" name="full_name" required></input>
        <label>phone</label>
        <input type="tel" name="phone" required></input>
        <label>password</label>
        <input type="password" name="password" required></input>
        <button type="submit">Зарегистрироваться</button>
    </form>    
</body>
<p>Уже есть аккаунт? <a href="{{ route('loginForm') }}">Войти</a></p>