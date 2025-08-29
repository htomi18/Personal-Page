<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personal portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main>
            <header>
                <nav class="sticky top-0 bg-blue-700">

                    <div class="flex text-white justify-between items-center text-2xl px-10 py-3">
                        <p class="italic">Homoki Tamás</p>
                        <div class="hidden md:block">
                            <div class="ml-10 relative h-full items-center p-1 cursor-pointer font-bold space-x-4 hover:text-gray-500 transition-colors ease-in-out duration-200">
                                <a>About me</a>
                                <a>Education</a>
                                <a>Experience</a>
                            </div>
                        </div>
                        <div class="md:hidden">
                            <button class="p-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700/50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-500 transition-colors duration-200" aria-label="Toogle menu">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </nav>
            </header>
        </main>
    </body>

</html>
