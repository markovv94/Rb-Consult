@extends('layouts.app')

@section('title', 'Rentenversicherungs-Rückabwicklung')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Rückabwicklung', 'url' => route('rueckabwicklung')],
    ['name' => 'Rentenversicherung', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 text-center lg:text-left relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>
                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                    Rentenversicherungen zurückabwickeln
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-black text-gray-900 dark:text-white leading-tight mb-6">
                    Zusatzrente sichern <br class="hidden lg:block"/>mit <span class="text-primary">Rückabwicklung</span>
                </h1>
                <p class="text-lg text-white mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    Private Rentenversicherungen aus früheren Jahren enthalten häufig unzureichende Widerrufsbelehrungen. Wir prüfen Ihre Verträge kostenlos und zeigen Ihnen, wie Sie durch eine Rückabwicklung Ihre Altersvorsorge optimieren können.
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
                    <img alt="Rentenversicherungs-Rückabwicklung" class="w-full h-auto object-cover" src="/photos/pension.jpeg"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark" id="benefits">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Warum Rentenversicherung wichtig ist</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Die Rente optimieren</h2>
            <p class="text-gray-600 dark:text-gray-400">
                Besonders bei älteren Rentenversicherungsverträgen finden sich fehlerhafte Widerrufsbelehrungen. Diese geben Ihnen das Recht, den Vertrag rückgängig zu machen und alle eingezahlten Beiträge zzgl. Zinsen zurückzufordern.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">trending_up</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Rentensteigerung</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Nutzen Sie die Rückzahlung, um neue, bessere Rentenprodukte abzuschließen. Oft mit deutlich besseren Konditionen als früher.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">security</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Rechtssicher</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    BGH-Urteile seit 2007 bestätigen die Rechtmäßigkeit von Widerrufen bei Rentenversicherungen aus den 1980er bis 2000er Jahren.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">verified</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Kostenlos prüfen</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Wir analysieren Ihren Vertrag kostenfrei. Zahlen Sie nur im Erfolgsfall eine angemessene Gebühr.
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Vertrag prüfen</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Senden Sie uns Ihren Rentenversicherungsvertrag und die Widerrufsbelehrung.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Analyse & Beratung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Wir prüfen die Rechtmäßigkeit und zeigen Ihnen die Chancen und Möglichkeiten auf.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Rückabwicklung starten</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Nach Ihrer Zustimmung kümmern wir uns um die rechtliche Geltendmachung Ihrer Ansprüche.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Auszahlung erhalten</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Bei erfolgreichem Widerruf erhalten Sie die Rückzahlung direkt von der Versicherung.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Sichern Sie Ihre Altersvorsorge!</h2>
                <p class="text-gray-600 dark:text-gray-400">Die kostenlose Prüfung ist unverbindlich und unabhängig.</p>
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
