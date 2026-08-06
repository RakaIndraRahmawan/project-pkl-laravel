<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $homepage->hero_title ?? 'Company Profile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">
    @yield('navbar')

    <main class="flex-grow pt-16">
        @yield('content')
    </main>

    @yield('footer')
</body>