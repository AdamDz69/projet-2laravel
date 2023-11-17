<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>My Goat App</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <header class="mb-8">
            <h1 class="text-4xl font-bold text-center">My Goat App</h1>
        </header>
        
        @yield('main')

        <footer class="mt-8 text-center text-gray-500 text-sm">
            &copy; 2023 My Goat App. All rights reserved.
        </footer>
    </div>
</body>
</html>
