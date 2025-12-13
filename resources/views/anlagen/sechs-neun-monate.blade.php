@extends('layouts.app')

@section('title', 'Geldanlage 6-9 Monate - Festgeld & Tagesgeld')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Anlagen', 'url' => route('anlagen')],
    ['name' => '6-9 Monate', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 text-center lg:text-left relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>
                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                    Kurzfristige Geldanlage
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-black text-gray-900 dark:text-white leading-tight mb-6">
                    Sichere Rendite in <br class="hidden lg:block"/><span class="text-primary">6-9 Monaten</span>
                </h1>
                <p class="text-lg text-white mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    Festgeld und Tagesgeld bieten Ihnen attraktive Zinssätze bei minimalen Risiken. Perfekt für Sparer, die ihr Geld mittelfristig sicher anlegen möchten und von aktuellen Zinsmärkten profitieren wollen.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded font-bold text-lg shadow-lg hover:bg-blue-800 transition transform hover:-translate-y-1" href="{{ route('kontakt.termin') }}">
                        Beratung vereinbaren
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-center gap-2 bg-white dark:bg-surface-dark text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-4 rounded font-bold text-lg hover:shadow-md transition" href="#produkte">
                        Produkte ansehen
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-secondary to-primary rounded-full opacity-20 blur-3xl dark:opacity-40"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-gray-800 max-w-md w-full">
                    <img alt="Geldanlage 6-9 Monate" class="w-full h-auto object-cover" src="/photos/invest.png"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark" id="produkte">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Ihre Anlagemöglichkeiten</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Sichere Geldanlage mit attraktiven Zinsen</h2>
            <p class="text-gray-600 dark:text-gray-400">
                Wir bieten Ihnen eine Auswahl an Festgeld und Tagesgeldprodukten mit transparenten Konditionen und attraktiven Renditen.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">account_balance</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Festgeld</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Feste Laufzeiten mit garantierter Rendite. Ideal für Sparer, die Planungssicherheit bevorzugen.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-600">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Aktuelle Zinssätze:</p>
                    <p class="text-2xl font-bold text-primary">3,5% - 4,2%</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">je nach Laufzeit</p>
                </div>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">attach_money</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Tagesgeld</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Flexibles Sparen ohne Bindung. Täglich verfügbar bei solider Rendite. Perfekt für Notfallfonds.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-600">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Aktuelle Zinssätze:</p>
                    <p class="text-2xl font-bold text-primary">2,8% - 3,2%</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">variabel, täglich angepasst</p>
                </div>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">trending_up</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Geldmarktfonds</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Profesionell verwaltete Geldmarktfonds mit laufender Renditeoptimierung und niedrigen Gebühren.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-600">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Durchschnittliche Rendite:</p>
                    <p class="text-2xl font-bold text-primary">3,0% - 3,8%</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">bei täglicher Verfügbarkeit</p>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-gray-700 p-8 overflow-x-auto">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Vergleich der Anlagemöglichkeiten</h3>
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 font-bold text-gray-900 dark:text-white">Produkt</th>
                        <th class="text-left py-3 px-4 font-bold text-gray-900 dark:text-white">Laufzeit</th>
                        <th class="text-left py-3 px-4 font-bold text-gray-900 dark:text-white">Zinssatz</th>
                        <th class="text-left py-3 px-4 font-bold text-gray-900 dark:text-white">Verfügbarkeit</th>
                        <th class="text-left py-3 px-4 font-bold text-gray-900 dark:text-white">Sicherheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <td class="py-4 px-4 font-semibold text-gray-900 dark:text-white">Festgeld 6 Monate</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">6 Monate</td>
                        <td class="py-4 px-4 text-primary font-bold">4,0%</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Nach Ablauf</td>
                        <td class="py-4 px-4"><span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs font-semibold">100% Schutz</span></td>
                    </tr>
                    <tr class="border-b border-gray-100 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <td class="py-4 px-4 font-semibold text-gray-900 dark:text-white">Festgeld 9 Monate</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">9 Monate</td>
                        <td class="py-4 px-4 text-primary font-bold">4,2%</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Nach Ablauf</td>
                        <td class="py-4 px-4"><span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs font-semibold">100% Schutz</span></td>
                    </tr>
                    <tr class="border-b border-gray-100 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <td class="py-4 px-4 font-semibold text-gray-900 dark:text-white">Tagesgeld</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Täglich</td>
                        <td class="py-4 px-4 text-primary font-bold">3,0%</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Täglich</td>
                        <td class="py-4 px-4"><span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs font-semibold">100% Schutz</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <td class="py-4 px-4 font-semibold text-gray-900 dark:text-white">Geldmarktfonds</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Täglich</td>
                        <td class="py-4 px-4 text-primary font-bold">3,4%</td>
                        <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Täglich</td>
                        <td class="py-4 px-4"><span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded text-xs font-semibold">Hoch</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-surface-dark rounded-2xl shadow-xl p-8 md:p-12">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-8">Ihre Vorteile bei RB Consulting</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <span class="material-icons">check_circle</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Unabhängige Beratung</h3>
                        <p class="text-gray-600 dark:text-gray-400">Wir sind unabhängig und empfehlen nur Produkte, die zu Ihren Zielen passen.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <span class="material-icons">check_circle</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Transparente Gebühren</h3>
                        <p class="text-gray-600 dark:text-gray-400">Alle Gebühren sind klar offengelegt. Keine versteckten Kosten.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <span class="material-icons">check_circle</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Persönliche Betreuung</h3>
                        <p class="text-gray-600 dark:text-gray-400">Während der gesamten Laufzeit stehen wir Ihnen zur Seite.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <span class="material-icons">check_circle</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Sicherheit auf höchstem Niveau</h3>
                        <p class="text-gray-600 dark:text-gray-400">Alle Anlagen sind durch die Einlagensicherung geschützt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Lassen Sie sich beraten</h2>
                <p class="text-gray-600 dark:text-gray-400">Finden Sie die beste Anlage für Ihre Ziele und Bedürfnisse.</p>
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
