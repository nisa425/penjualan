<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <nav>
        <ul>
            @section('sidebar')
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
            @show
        </ul>
    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>