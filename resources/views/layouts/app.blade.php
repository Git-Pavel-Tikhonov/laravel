<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Главная</a>
        <a href="/about">О техникуме</a>
        <a href="/contacts">Контакты</a>
    </header>

    <main>
        <div class="main-content">
            @yield('content')   
        </div>
    </main>

    <footer>
        &copy; 2024 Ангарский Политехнический Техникум. Все права защищены.
    </footer>
</body>
</html>