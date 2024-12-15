<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'My App')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen flex flex-col">

        <!-- Header -->
        <header class="bg-primary text-white shadow flex justify-between items-center">
            <div class="container mx-auto p-4 flex justify-between items-center">
                <h1 class="text-lg font-bold">My App</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">About</a></li>
                        <li><a href="#" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <button id="theme-toggle" class="btn btn-ghost">
                <i id="theme-icon" class="fas fa-moon"></i>
            </button>
        </header>

        <!-- Main Layout -->
        <div class="flex flex-grow">
            <!-- Sidebar -->
            <aside class="bg-base-200 w-64 p-4 hidden md:block">
                <ul class="menu p-0">
                    <li><a href="#" class="hover:bg-primary hover:text-white">Dashboard</a></li>
                    <li><a href="#" class="hover:bg-primary hover:text-white">Profile</a></li>
                    <li><a href="#" class="hover:bg-primary hover:text-white">Settings</a></li>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="flex-grow p-4">
                @yield('content')
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-neutral text-neutral-content p-4 mt-auto">
            <div class="container mx-auto text-center">
                <p>&copy; {{ date('Y') }} My App. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
