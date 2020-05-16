<!DOCTYPE html>
<html lang="{{ isset($lang) ? $lang : 'en' }}">
<head>
    <meta charset="UTF-8">
    <title>@yield(('title'))</title>
    <meta name="description" content="@yield(('description'))">
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <meta name=viewport content="width=device-width, initial-scale=1">
    @include('html.partials.headlinks')
    @include('html.partials.favicons')
    @include('html.partials.socialshare')
</head>
<body class="{{isset($entity) ? 'model-'.$entity->model.' view-'.$entity->view : '' }}">
<header>

</header>
<main>
    @yield('main')
</main>
<footer>
    <p>A kusikusi website.</p>
    @include('html.partials.langlist')
</footer>
@include('html.partials.debug')
</body>
</html>
