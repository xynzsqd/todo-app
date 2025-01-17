<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>@yield('page.title', config('app.name'))</title>
</head>

<body class="h-full">

    <div class="wrapper min-h-full flex flex-col">

        @include('includes.header')
        <main class="flex flex-auto">
            @yield('main')
        </main>
        @include('includes.footer')
        <script src="{{ asset('js/app.js') }}"></script>
    </div>

</body>

</html>
