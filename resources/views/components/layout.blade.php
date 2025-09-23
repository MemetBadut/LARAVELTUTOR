@props(['title' => 'Page Default'])

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title> {{ $title }} </title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>


        <x-header> {{ $dashboard ?? 'ini kentang' }} </x-header>


        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1>{{ $slot }} </h1>
            </div>
        </main>
    </div>

</body>

</html>
