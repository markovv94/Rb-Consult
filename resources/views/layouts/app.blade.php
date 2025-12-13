<!DOCTYPE html>
<html class="scroll-smooth" lang="de">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - RB Consulting</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1E3A8A",
                        secondary: "#C5A059",
                        "background-light": "#F9FAFB",
                        "background-dark": "#111827",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1F2937",
                    },
                    fontFamily: {
                        display: ["Merriweather", "serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
                },
            },
        };
    </script>
    <style>
        .text-gold { color: #C5A059; }
        .bg-gold { background-color: #C5A059; }
        .border-gold { border-color: #C5A059; }
    </style>
    @yield('styles')
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-body transition-colors duration-300">
    <nav class="sticky top-0 z-50 bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur shadow-sm border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 hover:opacity-80 transition-opacity">
                    <span class="material-icons text-primary text-3xl">account_balance</span>
                    <span class="font-display font-bold text-2xl text-primary tracking-tight">RB Consulting</span>
                </a>
                <div class="hidden md:flex space-x-8 items-center">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition" href="{{ route('home') }}">Startseite</a>

                    <!-- Rückabwicklung Dropdown -->
                    <div class="relative group">
                        <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition flex items-center" href="{{ route('rueckabwicklung') }}">
                            Rückabwicklung
                            <span class="material-icons text-sm ml-1">expand_more</span>
                        </a>
                        <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-surface-dark rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ route('rueckabwicklung.lebensversicherung') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 first:rounded-t-lg">Lebensversicherung</a>
                            <a href="{{ route('rueckabwicklung.rente') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 last:rounded-b-lg">Rentenversicherung</a>
                        </div>
                    </div>

                    <!-- Anlagen Dropdown -->
                    <div class="relative group">
                        <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition flex items-center" href="{{ route('anlagen') }}">
                            Anlagen
                            <span class="material-icons text-sm ml-1">expand_more</span>
                        </a>
                        <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-surface-dark rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ route('anlagen.kurz') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 first:rounded-t-lg">6-9 Monate</a>
                            <a href="{{ route('nettopolcie') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 last:rounded-b-lg">Nettopolice</a>
                        </div>
                    </div>

                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition" href="{{ route('bav') }}">BAV-Sanierung</a>
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition" href="{{ route('uberuns') }}">Über uns</a>
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition" href="{{ route('referenzen') }}">Referenzen</a>

                    <!-- Kontakt Dropdown -->
                    <div class="relative group">
                        <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-secondary font-medium transition flex items-center" href="{{ route('kontakt') }}">
                            Kontakt
                            <span class="material-icons text-sm ml-1">expand_more</span>
                        </a>
                        <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-surface-dark rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ route('kontakt.termin') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 first:rounded-t-lg">Termin vereinbaren</a>
                            <a href="{{ route('kontakt.formular') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 last:rounded-b-lg">Kontaktformular</a>
                        </div>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-gray-600 dark:text-gray-300 hover:text-primary focus:outline-none">
                        <span class="material-icons text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-900 text-gray-300 py-12 border-t-4 border-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-icons text-white text-3xl">account_balance</span>
                        <span class="font-display font-bold text-2xl text-white tracking-tight">RB Consulting</span>
                    </div>
                    <p class="text-sm max-w-sm mb-6 text-gray-400">
                        Ihr kompetenter Partner für Finanzen und Versicherungen in Baden-Württemberg. Unabhängig, transparent und persönlich.
                    </p>
                    <div class="flex space-x-4">
                        <a class="text-gray-400 hover:text-secondary transition" href="#"><span class="material-icons">facebook</span></a>
                        <a class="text-gray-400 hover:text-secondary transition" href="#"><span class="material-icons">link</span></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-4 uppercase text-sm tracking-wider">Navigation</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a class="hover:text-secondary transition" href="{{ route('home') }}">Startseite</a></li>
                        <li><a class="hover:text-secondary transition" href="{{ route('anlagen') }}">Anlagen</a></li>
                        <li><a class="hover:text-secondary transition" href="{{ route('rueckabwicklung') }}">Rückabwicklung</a></li>
                        <li><a class="hover:text-secondary transition" href="{{ route('uberuns') }}">Über uns</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-4 uppercase text-sm tracking-wider">Kontakt</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <span class="material-icons text-secondary text-sm mt-0.5">place</span>
                            <span>Musterstraße 123<br/>70173 Stuttgart</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-icons text-secondary text-sm">phone</span>
                            <a class="hover:text-white transition" href="tel:+49711123456">+49 711 123 456</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-icons text-secondary text-sm">email</span>
                            <a class="hover:text-white transition" href="mailto:info@rb-consulting.de">info@rb-consulting.de</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>© 2024 RB Consulting. Alle Rechte vorbehalten.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a class="hover:text-gray-300" href="#">Impressum</a>
                    <a class="hover:text-gray-300" href="#">Datenschutz</a>
                    <a class="hover:text-gray-300" href="#">Erstinformation</a>
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
