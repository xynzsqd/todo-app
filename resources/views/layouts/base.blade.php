<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>
</head>

<body class="h-full">
    <div class="wrapper min-h-full flex flex-col">
        @include('includes.header')
        <main class="flex-auto">
            @yield('main')
        </main>
        @include('includes.footer')
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
