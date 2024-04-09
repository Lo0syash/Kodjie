<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/public/favicon.svg">
    {{-- @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="/public/build/assets/app-b9d81915.css">
    <script src="/public/build/assets/app-7d143a0f.js" defer></script>

</head>
<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
