<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 dark:text-white">

                <h2 class="text-2xl font-bold text-center">Eloquent Relationshps</h2>

                {{-- ONE TO ONE --}}
                {{-- <h3 class="text-xl text-center italic my-4">One to One</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-500">
                            User's character username:
                        </p>
                        <p class="ml-8">{{ $user->character->username }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-500">
                            Character user's username:
                        </p>
                        <p class="ml-8">{{ $character->user->name }}</p>
                    </div>
                </div> --}}

                {{-- ONE TO MANY --}}
                <h3 class="text-xl text-center italic my-4">One to Many</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-500">
                            User's messages:
                        </p>
                        @foreach ($user->messages as $message)
                            <p class="ml-8">{{ $message->id }} - {{ $message->body }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-500">
                            Message User's Name:
                        </p>
                        <p class="ml-8">{{ $message->user->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
