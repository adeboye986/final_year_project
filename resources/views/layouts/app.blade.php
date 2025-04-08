<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Campus Connect')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- if using Laravel Vite -->
</head>
<body class="font-sans antialiased bg-gray-50">

    @include('partials.navbar')

    <main class="py-6">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
