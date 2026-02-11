<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aksara | {{ $title ?? 'Admin Panel' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --bg-primary: #F7F5F2;
            --bg-secondary: #E9EDC9;
            --accent-brand: #84A98C;
            --text-dark: #2F3E46;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-dark);
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        [x-cloak] {
            display: none !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--bg-secondary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-brand);
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden bg-[#F7F5F2]" x-data="{ sidebarOpen: true }" x-cloak>

    <div class="flex min-h-screen relative text-[#2F3E46]">
        <aside class="fixed inset-y-0 left-0 z-50 transition-all duration-300 ease-in-out transform bg-[#E9EDC9] border-r border-black/5 shadow-2xl overflow-hidden"
            :class="sidebarOpen ? 'w-64' : 'w-20'">
            <x-admin.sidebar />
        </aside>

        <div class="flex flex-col flex-1 transition-all duration-300 ease-in-out" :class="sidebarOpen ? 'pl-64' : 'pl-20'">

            <header class="sticky top-0 z-40 w-full backdrop-blur-md bg-[#F7F5F2]/80 border-b border-black/5">
                <x-admin.navbar :title="$title" />
            </header>

            <main class="flex-1 p-6 lg:p-10 bg-[#F7F5F2]">
                <div class="max-w-7xl mx-auto">
                    <div>
                        {{ $slot }}
                    </div>
                </div>
            </main>

            <footer class="mt-auto py-6 px-10 border-t border-black/5 bg-[#F7F5F2]">
                <x-admin.footer />
            </footer>
        </div>
    </div>

    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-40 bg-[#2F3E46]/40 backdrop-blur-sm md:hidden transition-opacity">
    </div>

    <script>
        window.addEventListener('load', function() {
            if (window.Swal) {
                const Toast = window.Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#F7F5F2',
                    color: '#2F3E46',
                    customClass: {
                        popup: 'rounded-2xl border border-black/5 shadow-2xl backdrop-blur-md bg-white/90 px-5 py-3 mt-4',
                        title: 'text-sm font-bold font-display',
                        timerProgressBar: 'bg-[#84A98C]'
                    }
                });

                @if (session('success'))
                    Toast.fire({
                        icon: 'success',
                        iconColor: '#84A98C',
                        title: "{!! session('success') !!}"
                    });
                @endif

                @if (session('error'))
                    Toast.fire({
                        icon: 'error',
                        iconColor: '#EF4444',
                        title: "{!! session('error') !!}"
                    });
                @endif

                @if ($errors->any())
                    Toast.fire({
                        icon: 'error',
                        iconColor: '#EF4444',
                        title: "Terjadi kesalahan pada input."
                    });
                @endif
            }
        });
    </script>

    <style>
        .swal2-popup.swal2-toast {
            display: flex !important;
            align-items: center !important;
            width: auto !important;
            min-width: 300px;
            max-width: 90vw;
        }

        .swal2-timer-progress-bar {
            height: 3px !important;
        }
    </style>

    @stack('scripts')
</body>

</html>
