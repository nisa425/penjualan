<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <!-- Sidebar -->
    <ul>
        @section('sidebar')
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
        @show
    </ul>

    <!-- Konten Utama -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>