<!DOCTYPE html>
<html>
<head>
    <title>Fluffy Technologies - разработка сайтов</title>

    <link href="..\public\css\main.css" rel="stylesheet" type="text/css">
</head>
<body>

{{--<div class="title">Привет!</div>--}}
<header>
    <ul>
        <li><a href="../public">Главная</a></li>
        <li><a href="services">Услуги</a></li>
        <li><a href="portfolio">Портфолио</a></li>
        <li><a href="about">О нас</a></li>
    </ul>
</header>
<article>
    @yield('content')
</article>
<footer>
    Copyright Fluffy-tech
</footer>
</body>
</html>