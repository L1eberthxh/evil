@extends('layouts.site')

@section('title', 'Профиль')

@section('content')
<section class="hero">
    <div class="container">
        <h1>Личный кабинет</h1>
        <p>Добро пожаловать, {{ session('login') }}!</p>
        <p>Это защищённая страница. Её видят только авторизованные.</p>
    </div>
</section>
@endsection