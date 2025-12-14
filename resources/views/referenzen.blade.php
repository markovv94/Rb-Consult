@extends('layouts.app')

@section('title', 'Referenzen - Kundenerfolgsgeschichten')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Referenzen', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto relative">
            <!-- Gradient overlay mask behind text -->
            <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>

            <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                Vertraute von Hunderten Kunden
            </div>
            <h1 class="text-4xl lg:text-6xl font-display font-black leading-tight mb-6 drop-shadow-lg">
                <span style="color: rgba(226, 235, 255, 1);">Erfolgsgeschichten unserer</span> <span class="text-primary">Kunden</span>
            </h1>
            <p class="text-lg text-white mb-8 leading-relaxed drop-shadow">
                Tausende Kunden vertrauen RB Consulting bei ihren Finanzentscheidungen. Lesen Sie, wie wir ihnen geholfen haben, ihre Ziele zu erreichen.
            </p>
            <div class="flex justify-center gap-8 text-center flex-wrap">
                <div class="group hover:scale-105 transition-transform duration-300 relative">
                    <div class="absolute -inset-4 bg-primary/10 rounded-lg blur opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-4xl font-display font-bold text-primary mb-2">€18,7M</div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Vermögen für Kunden zurückgewonnen</p>
                    </div>
                </div>
                <div class="group hover:scale-105 transition-transform duration-300 relative">
                    <div class="absolute -inset-4 bg-secondary/10 rounded-lg blur opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-4xl font-display font-bold text-secondary mb-2">4.200+</div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Zufriedene Kunden</p>
                    </div>
                </div>
                <div class="group hover:scale-105 transition-transform duration-300 relative">
                    <div class="absolute -inset-4 bg-primary/10 rounded-lg blur opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-4xl font-display font-bold text-primary mb-2">15+</div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Jahre Erfahrung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Kundenerfolgsgeschichten</h2>
            <p class="text-gray-600 dark:text-gray-400">Echte Beispiele, wie RB Consulting seinen Kunden geholfen hat</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">MB</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Marcus B., Stuttgart</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Kaufmann</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Ich hatte eine alte Lebensversicherung, die mich nichts mehr wert war. RB Consulting hat sie überprüft und konnte die Rückabwicklung durchsetzen. Ich habe €23.450 zurückbekommen – viel mehr als der Rückkaufswert! Sehr professionelle Arbeit."
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> Lebensversicherungs-Rückabwicklung</p>
                </div>
            </div>

            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">SK</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Sandra K., Heilbronn</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Bürokauffrau</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Für meine Altersvorsorge wurde ich mit einer Rentenversicherung von 1998 beraten. RB Consulting hat aufgezeigt, dass sie fehlerhaft war und konnte sie rückgängig machen. Jetzt habe ich €15.890 für neue, bessere Produkte. Danke!"
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> Rentenversicherungs-Rückabwicklung</p>
                </div>
            </div>

            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">TD</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Thomas D., Tübingen</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Unternehmer</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Als Unternehmer brauchte ich eine bessere BAV-Struktur für meine Mitarbeiter. RB Consulting hat meine alte Lösung analysiert, wertvolle Kosten gespart und ein modernes System etabliert. Meine Mitarbeiter sind jetzt zufriedener."
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> BAV-Sanierung</p>
                </div>
            </div>

            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">RW</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Rosa W., Ludwigsburg</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Rentnerin</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Ich war skeptisch, ob sich die Rückabwicklung noch lohnt mit meinem Alter. RB Consulting hat mich überzeugt und durchfechten können. €8.200 zusätzliche Rente pro Jahr – das ist für meinen Lebensunterhalt sehr wichtig!"
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> Lebensversicherungs-Rückabwicklung</p>
                </div>
            </div>

            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">PJ</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Peter J., Esslingen</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Finanzberater</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Ich empfehle RB Consulting meinen Kunden weiter. Sie sind zuverlässig, kompetent und erreichen reale Ergebnisse. Die Zusammenarbeit ist unkompliziert und transparent. Ein echter Partner für Finanzfragen."
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> Geldanlage & Altersversorgung</p>
                </div>
            </div>

            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-secondary/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex items-start gap-4 mb-6 relative z-10">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center flex-shrink-0 text-white text-2xl font-bold">IP</div>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Ines P., Böblingen</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Angestellte</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-4 relative z-10">
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                    <span class="material-icons text-secondary text-sm">star</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed relative z-10">
                    "Ich wollte einen Teil meines Ersparten in Festgeld anlegen. RB Consulting hat mir transparente Optionen gezeigt und die besten Konditionen für meine Situation gefunden. Die Rendite ist deutlich besser als bei meiner Bank!"
                </p>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-600 relative z-10">
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span class="font-semibold text-secondary">Leistung:</span> Festgeld-Anlage</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Warum Kunden uns vertrauen</h2>
            <p class="text-white">Unsere Stärken sprechen für sich</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons text-2xl">verified</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Zertifiziert & Lizenziert</h3>
                <p class="text-white">Alle Berater sind zertifiziert nach Finanzdiensterichtlinie und regelmäßig weitergebildet.</p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons text-2xl">handshake</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Unabhängig & Transparent</h3>
                <p class="text-white">Wir vertreten keine bestimmten Versicherungsgesellschaften – nur Ihre Interessen.</p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons text-2xl">trending_up</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Nachgewiesene Erfolge</h3>
                <p class="text-white">Tausende erfolgreiche Fälle mit dokumentierten Ergebnissen beweisen unsere Kompetenz.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Sie könnten der nächste Erfolgsfall sein</h2>
                <p class="text-gray-600 dark:text-gray-400">Lassen Sie sich kostenlos und unverbindlich beraten.</p>
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
