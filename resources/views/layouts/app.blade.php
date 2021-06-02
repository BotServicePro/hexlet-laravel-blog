<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

{{--    <header class="flex-shrink-0">--}}
{{--        <nav class="navbar navbar-expand-md navbar-dark bg-dark">--}}
{{--            <a class="navbar-brand" href="{{ route('page.index') }}">Laravel blog</a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="{{ route('page.index') }}">Main</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="{{ route('article.index') }}">Articles</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="{{ route('rating.index') }}">Rating</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="{{ route('article.create') }}">Create an article</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="{{ route('page.about') }}">About</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </header>--}}
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('articles.index') }}">AKDEV-Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('articles.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rating.index') }}">Rating</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('page.about') }}">About</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.create') }}">Create article</a>
            </li>
        </ul>
    </div>
</nav>
    </header>

    @include('flash::message')

    <div class="container mt-4">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>

    {{--    Вы можете определить, есть ли в секции наследуемого шаблона содержимое, используя директиву @hasSection: --}}

        @hasSection('navigation')
            <div class="pull-right">
                @yield('navigation')
            </div>
            <div class="clearfix"></div>
        @endif

    </div>
    </body>
</html>
