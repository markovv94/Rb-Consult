@extends('layouts.app')

@section('title', 'Lebensversicherungs-Rückabwicklung')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Rückabwicklung', 'url' => route('rueckabwicklung')],
    ['name' => 'Lebensversicherung', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 text-center lg:text-left relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>
                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                    Lebensversicherungen zurückabwickeln
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-black text-gray-900 dark:text-white leading-tight mb-6">
                    Mehr Geld zurück <br class="hidden lg:block"/>aus Ihrer <span class="text-primary">Lebensversicherung</span>
                </h1>
                <p class="text-lg text-white mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    Viele alte Lebensversicherungsverträge enthalten fehlerhafte Widerrufsbelehrungen. Wir prüfen kostenlos, ob Sie durch eine Rückabwicklung deutlich mehr Geld zurückbekommen können als der aktuelle Rückkaufswert.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded font-bold text-lg shadow-lg hover:bg-blue-800 transition transform hover:-translate-y-1" href="{{ route('kontakt.termin') }}">
                        Jetzt kostenlos prüfen
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-center gap-2 bg-white dark:bg-surface-dark text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-4 rounded font-bold text-lg hover:shadow-md transition" href="#benefits">
                        Mehr erfahren
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-secondary to-primary rounded-full opacity-20 blur-3xl dark:opacity-40"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-gray-800 max-w-md w-full">
                    <img alt="Lebensversicherungs-Rückabwicklung" class="w-full h-auto object-cover" src="/photos/ins.jpg"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark" id="benefits">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Warum Rückabwicklung sinnvoll ist</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Die Chancen nutzen</h2>
            <p class="text-gray-600 dark:text-gray-400">
                Durch fehlerhafte Widerrufsbelehrungen in alten Verträgen haben Sie oft das Recht, den gesamten Versicherungsvertrag rückgängig zu machen und die eingezahlten Prämien zurückzufordern.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">attach_money</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Mehr Kapital zurück</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Oft erhalten Sie deutlich mehr als den Rückkaufswert - teilweise sogar mehr als Ihre eingezahlten Prämien.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">gavel</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Rechtlich sicher</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    BGH-Urteile bestätigen die fehlerhafte Widerrufsbelehrung in Millionen von Verträgen seit den 1990ern.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">verified_user</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Kostenlos prüfen</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Wir prüfen Ihren Vertrag kostenlos und unverbindlich. Sie gehen kein Risiko ein.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-surface-dark rounded-2xl shadow-xl p-8 md:p-12">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-8">Der Prozess - So funktioniert es</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Unterlagen einreichen</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Versicherungsvertrag und Versicherungsschein hochladen oder zuschicken.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Kostenlose Prüfung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Wir prüfen Ihren Vertrag auf Widerrufsfelder und berechnen die Chancen.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Rückabwicklung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Auf Ihr OK hin starten wir die rechtliche Rückabwicklung mit dem Versicherer.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Erfolg & Auszahlung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Bei erfolgreicher Rückabwicklung erhalten Sie Ihr Geld zurück.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Bereit, mehr Geld zurückzubekommen?</h2>
                <p class="text-gray-600 dark:text-gray-400">Die kostenlose Prüfung ist unverbindlich. Kein Risiko für Sie.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('kontakt.termin') }}" class="bg-primary hover:bg-blue-800 text-white px-8 py-3 rounded shadow transition font-semibold whitespace-nowrap">
                    Termin vereinbaren
                </a>
                <a href="{{ route('kontakt.formular') }}" class="bg-transparent border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-8 py-3 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition font-semibold whitespace-nowrap">
                    Kontaktformular
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
