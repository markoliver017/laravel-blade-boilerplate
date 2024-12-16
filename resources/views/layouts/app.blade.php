<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'My App')</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="min-h-screen flex flex-col">

        <!-- Header -->
        <header class="bg-primary text-white shadow flex justify-between items-center">
            <div class="container mx-auto p-4 flex justify-between items-center">
                <h1 class="text-lg font-bold">My App</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/users" class="hover:underline">Home</a></li>
                        {{-- <li><a href="#" class="hover:underline">About</a></li>
                        <li><a href="#" class="hover:underline">Contact</a></li> --}}
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
                    <li><a href="#" class="hover:bg-primary hover:text-white">Home</a></li>
                    {{-- <li><a href="#" class="hover:bg-primary hover:text-white">Profile</a></li>
                    <li><a href="#" class="hover:bg-primary hover:text-white">Settings</a></li> --}}
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="flex-grow p-4">
                @if ($message = session()->pull('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
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
