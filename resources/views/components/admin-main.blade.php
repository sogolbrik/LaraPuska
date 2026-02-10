<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraPuska — {{ $title ?? 'Admin Panel' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --bg-primary: #FFFDF1;
            --accent-light: #FFCE99;
            --accent-brand: #FF9644;
            --text-dark: #562F00;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-dark);
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-light);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-brand);
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden" x-data="{ sidebarOpen: true }">

    <div class="flex min-h-screen relative">

        <aside class="fixed inset-y-0 left-0 z-50 transition-all duration-300 ease-in-out transform bg-white border-r border-orange-100 shadow-sm"
            :class="sidebarOpen ? 'w-64 translate-x-0' : 'w-20 -translate-x-full md:translate-x-0'">
            <x-admin-sidebar />
        </aside>

        <div class="flex flex-col flex-1 transition-all duration-300 ease-in-out" :class="sidebarOpen ? 'md:ml-64' : 'md:ml-20'">

            <header class="sticky top-0 z-40 w-full backdrop-blur-md bg-[#FFFDF1]/80 border-b border-orange-100">
                <x-admin-navbar />
            </header>

            <main class="flex-1 p-6 lg:p-10">
                <div class="max-w-7xl mx-auto">
                    <div x-show="true" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">

                        {{ $slot }}

                    </div>
                </div>
            </main>

            <footer class="mt-auto py-6 px-10 border-t border-orange-100">
                <x-admin-footer />
            </footer>
        </div>

    </div>

    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-40 bg-black/10 backdrop-blur-sm md:hidden transition-opacity" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

</body>

</html>
