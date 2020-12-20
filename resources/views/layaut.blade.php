    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Краткое портфолио</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="#">Технологии</a>
        <a class="p-2 text-dark" href="#">В изучении</a>
        <a class="p-2 text-dark" href="#">Примеры работ</a>
        <a class="p-2 text-dark" href="authorization">Вход</a>
    </nav>
    <a class="btn btn-outline-primary" href="registration">зарегистрироваться</a>
</header>
<div class="container">
    @yield('content')
</div>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-white">Больше примеров на <a href="https://github.com/Maybe-MiLan">GutHab.com</a></span>
    </div>
</footer>
</body>
</html>

