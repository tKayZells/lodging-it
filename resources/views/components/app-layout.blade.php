<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Lodging it</title>

    <script src="https://kit.fontawesome.com/60c8a3dd5d.js" crossorigin="anonymous"></script>
    {{ $scripts ?? '' }}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="min-h-screen bg-gray-100">
    <div id="app">
        @include('components.app-nav-bar')
        <header class="border-b bg-white">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    {{ $header }}
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="bg-white rounded-sm shadow-sm p-5">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>
</html>