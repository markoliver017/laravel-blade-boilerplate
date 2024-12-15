@dump(get_defined_vars())
<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="px-5 py-2 bg-base-200 flex">
        <ul class="menu menu-vertical lg:menu-horizontal rounded-box">
            <li><a>Item 1</a></li>
            <li><a>Item 2</a></li>
            <li><a>Item 3</a></li>
        </ul>
    </div>
    <div class="flex justify-between items-center">
        <h1>New Laravel App!</h1>
        <button class="btn">Button</button>
        <h1>New Laravel App!</h1>
    </div>
    @forelse ($users as $user)
        <div>{{ $user->name }}</div>
    @empty
    <p>No users found.</p>
    @endforelse
</body>
</html>