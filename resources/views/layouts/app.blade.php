<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Contact Manager')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

<header class="bg-white shadow fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('contacts.index') }}" class="text-2xl font-bold text-blue-600">
            📇 My Contacts
        </a>

        <nav class="space-x-4">
            <a href="{{ route('contacts.create') }}" class="text-sm text-blue-600 hover:underline">Add Contact</a>
        </nav>
    </div>
</header>

<main class="flex-1 pt-24 pb-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        @yield('content')
    </div>
</main>

<footer class="bg-white border-t mt-auto">
    <div class="max-w-7xl mx-auto py-4 px-4 text-sm text-center text-gray-500">
        © {{ date('Y') }} Contact Manager. All rights reserved.
    </div>
</footer>

</body>
</html>
