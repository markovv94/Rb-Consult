@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
<header class="relative bg-primary py-24 sm:py-32">
    <div class="absolute inset-0 overflow-hidden">
        <img alt="Modernes Bürogebäude in Baden-Württemberg" class="w-full h-full object-cover object-center opacity-20" src="/photos/office.png"/>
        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Gradient overlay mask behind text -->
        <div class="absolute -inset-8 bg-gradient-to-br from-white/20 via-secondary/10 to-transparent dark:from-white/10 dark:via-secondary/5 dark:to-transparent rounded-3xl -z-10 blur-2xl"></div>

        <h1 class="text-4xl font-display font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-6 drop-shadow-lg">
            Kontaktieren Sie uns
        </h1>
        <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto drop-shadow">
            Ihr Partner für Finanzen und Versicherungen in Baden-Württemberg. Lassen Sie uns gemeinsam Ihre Zukunft gestalten.
        </p>
    </div>
</header>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1 space-y-6">
            <div class="group bg-surface-light dark:bg-surface-dark rounded-lg shadow-xl p-8 border-t-4 border-secondary hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <h3 class="text-2xl font-display font-bold text-primary dark:text-white mb-6 relative z-10">Kontaktdaten</h3>
                <div class="space-y-6 relative z-10">
                    <div class="flex items-start hover:translate-x-1 transition-transform">
                        <div class="flex-shrink-0">
                            <span class="material-icons-outlined text-secondary text-2xl">location_on</span>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Adresse</p>
                            <p class="text-lg text-gray-900 dark:text-white">Königstraße 123<br/>70173 Stuttgart</p>
                        </div>
                    </div>
                    <div class="flex items-start hover:translate-x-1 transition-transform">
                        <div class="flex-shrink-0">
                            <span class="material-icons-outlined text-secondary text-2xl">phone</span>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Telefon</p>
                            <a href="tel:+49711123456" class="text-lg text-gray-900 dark:text-white hover:text-secondary transition cursor-pointer">+49 711 1234567</a>
                        </div>
                    </div>
                    <div class="flex items-start hover:translate-x-1 transition-transform">
                        <div class="flex-shrink-0">
                            <span class="material-icons-outlined text-secondary text-2xl">email</span>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">E-Mail</p>
                            <a href="mailto:info@rb-consulting.de" class="text-lg text-gray-900 dark:text-white hover:text-secondary transition cursor-pointer">info@rb-consulting.de</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-8">
            <div class="group bg-surface-light dark:bg-surface-dark rounded-lg shadow-xl p-8 lg:p-10 border-t-4 border-secondary hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <h2 class="text-3xl font-display font-bold text-primary dark:text-white mb-2 relative z-10">Schreiben Sie uns</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-8 relative z-10">Füllen Sie das Formular aus und wir melden uns innerhalb von 24 Stunden bei Ihnen.</p>
                <form action="{{ route('kontakt.submit') }}" class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2" method="POST">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="first-name">Vorname</label>
                        <div class="mt-1">
                            <input autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm focus:ring-secondary focus:border-secondary border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white" id="first-name" name="first-name" type="text"/>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="last-name">Nachname</label>
                        <div class="mt-1">
                            <input autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm focus:ring-secondary focus:border-secondary border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white" id="last-name" name="last-name" type="text"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email</label>
                        <div class="mt-1">
                            <input autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-secondary focus:border-secondary border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white" id="email" name="email" type="email"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="subject">Betreff</label>
                        <div class="mt-1">
                            <select class="py-3 px-4 block w-full shadow-sm focus:ring-secondary focus:border-secondary border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white" id="subject" name="subject">
                                <option>Allgemeine Anfrage</option>
                                <option>Versicherungsberatung</option>
                                <option>Finanzplanung</option>
                                <option>Terminwunsch</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="message">Nachricht</label>
                        <div class="mt-1">
                            <textarea class="py-3 px-4 block w-full shadow-sm focus:ring-secondary focus:border-secondary border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white" id="message" name="message" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-5">
                                <input class="focus:ring-secondary h-4 w-4 text-primary border-gray-300 rounded" id="privacy" name="privacy" type="checkbox" required/>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Ich stimme zu, dass meine Angaben zur Kontaktaufnahme und Zuordnung für eventuelle Rückfragen dauerhaft gespeichert werden.
                                    <a class="font-medium text-primary hover:text-secondary dark:text-secondary dark:hover:text-yellow-300" href="#">Datenschutzbestimmungen</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-bold text-white bg-primary hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors duration-200" type="submit">
                            Nachricht senden
                            <span class="material-icons-outlined ml-2">send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<section class="w-full h-96 bg-gray-200 dark:bg-gray-700 relative">
    <div class="absolute inset-0 flex items-center justify-center">
        <img alt="Map background abstract" class="w-full h-full object-cover opacity-40 grayscale" src="/photos/map.png"/>
        <div class="absolute bg-white dark:bg-surface-dark p-6 rounded-lg shadow-xl text-center">
            <span class="material-icons-outlined text-primary text-4xl mb-2 block">map</span>
            <p class="text-gray-800 dark:text-white font-bold">Hier finden Sie uns</p>
            <button class="mt-4 bg-primary text-white px-4 py-2 rounded hover:bg-blue-900 transition">Route planen</button>
        </div>
    </div>
</section>
@endsection
