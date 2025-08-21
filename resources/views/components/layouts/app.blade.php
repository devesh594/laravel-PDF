<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'My First Blade Page')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>
    {{-- <x-include.header />

    {{ $slot }}

    <x-include.footer /> --}}
    <div>
        @include('components.include.header')
        <main class="container">
            @yield('content')
        </main>

        @include('components.include.footer')
    </div>
</body>

</html>