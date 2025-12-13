@extends('layouts.app')

@section('title', 'BAV-Sanierung - Betriebliche Altersversorgung')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'BAV-Sanierung', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 text-center lg:text-left relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>

                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                    Für Unternehmen
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-black text-gray-900 dark:text-white leading-tight mb-6 drop-shadow-lg">
                    BAV-Sanierung für <br class="hidden lg:block"/><span class="text-primary">sichere Altersversorgung</span>
                </h1>
                <p class="text-lg text-white mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed drop-shadow">
                    Die betriebliche Altersversorgung ist eine wichtige Säule der Mitarbeiterbindung. Wir helfen Ihnen, potenzielle Probleme zu erkennen und Ihre BAV-Struktur zukunftssicher zu gestalten.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded font-bold text-lg shadow-lg hover:bg-blue-800 transition transform hover:-translate-y-1" href="{{ route('kontakt.termin') }}">
                        Jetzt beraten lassen
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-center gap-2 bg-white dark:bg-surface-dark text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-4 rounded font-bold text-lg hover:shadow-md transition" href="#vorteile">
                        Mehr erfahren
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-secondary to-primary rounded-full opacity-20 blur-3xl dark:opacity-40"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-gray-800 max-w-md w-full">
                    <img alt="BAV-Sanierung" class="w-full h-auto object-cover" src="/photos/pension.jpg"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark" id="vorteile">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Warum BAV-Sanierung wichtig ist</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Sichere die Altersversorgung Ihrer Mitarbeiter</h2>
            <p class="text-gray-600 dark:text-gray-400">
                Viele betriebliche Altersversorgungssysteme sind nicht mehr zeitgemäß oder wirtschaftlich. Eine Sanierung schafft Sicherheit für Arbeitgeber und Arbeitnehmer gleichermaßen.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/10 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-3xl text-secondary">groups</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 relative z-10">Mitarbeiterbindung</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed relative z-10">
                    Eine attraktive BAV erhöht die Mitarbeiterzufriedenheit und reduziert Fluktuation. Dies spart Kosten bei Neueinstellung und Einarbeitung.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/10 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-3xl text-secondary">balance</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 relative z-10">Rechtssicherheit</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed relative z-10">
                    Wir stellen sicher, dass Ihre BAV-Struktur alle gesetzlichen Anforderungen erfüllt und zukunftssicher ist. Risikovorsorge inklusive.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/10 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-3xl text-secondary">trending_up</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 relative z-10">Kostenoptimierung</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed relative z-10">
                    Eine durchdachte Sanierung reduziert oft die Verwaltungskosten und optimiert die Rendite für alle Beteiligten.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-12 text-center">Häufige Probleme bei bestehenden BAV-Systemen</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900">
                            <span class="material-icons text-red-600 dark:text-red-300">warning</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Veraltete Vertragsstrukturen</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400">Alte BAV-Systeme entsprechen oft nicht mehr den modernen Anforderungen und Erwartungen von Mitarbeitern.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900">
                            <span class="material-icons text-red-600 dark:text-red-300">warning</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Hohe Verwaltungskosten</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400">Nicht optimierte Systeme führen zu unnötig hohen Verwaltungskosten, die sowohl Arbeitgeber als auch Mitarbeiter belasten.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900">
                            <span class="material-icons text-red-600 dark:text-red-300">warning</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Unzureichende Rentabilität</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400">Schlechte Renditen führen zu geringeren Leistungen für Mitarbeiter und erhöhter Kostenbelastung für das Unternehmen.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900">
                            <span class="material-icons text-red-600 dark:text-red-300">warning</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Rechtliche Unsicherheiten</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400">Fehlende Compliance kann zu teuren Nachzahlungen und rechtlichen Problemen führen.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-surface-dark rounded-2xl shadow-xl p-8 md:p-12 border border-gray-200 dark:border-gray-700">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-8">Unser Sanierungsprozess</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Analyse</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Umfassende Analyse Ihrer bestehenden BAV-Struktur, Vertragsbedingungen und Kostenmodelle.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Konzeptionierung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Entwicklung eines maßgeschneiderten Sanierungskonzepts, das Ihre Ziele erreicht.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Umsetzung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Professionelle Umsetzung der Sanierungsschritte und Begleitung aller Beteiligten.</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Betreuung</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Laufende Betreuung und Optimierung Ihrer BAV-Struktur nach der Sanierung.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Besondere Leistungen</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Was wir für Sie tun</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary text-2xl flex-shrink-0 mt-1">check_circle</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Individuelle Beratung</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Nicht jedes Unternehmen ist gleich. Wir entwickeln Lösungen, die zu Ihrer Situation passen.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary text-2xl flex-shrink-0 mt-1">check_circle</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Compliance-Sicherheit</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Wir stellen sicher, dass alle Maßnahmen alle gesetzlichen Anforderungen erfüllen.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary text-2xl flex-shrink-0 mt-1">check_circle</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Kostenreduktion</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Durch Optimierung der Strukturen entstehen oft erhebliche Kosteneinsparungen.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary text-2xl flex-shrink-0 mt-1">check_circle</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Mitarbeiterzufriedenheit</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Eine moderne, faire BAV erhöht Mitarbeiterzufriedenheit und -bindung deutlich.</p>
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
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Bereit zur Sanierung?</h2>
                <p class="text-gray-600 dark:text-gray-400">Lassen Sie sich von unseren Experten beraten und optimieren Sie Ihre betriebliche Altersversorgung.</p>
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
