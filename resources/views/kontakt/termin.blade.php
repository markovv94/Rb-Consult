@extends('layouts.app')

@section('title', 'Termin vereinbaren - RB Consulting')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Kontakt', 'url' => route('kontakt')],
    ['name' => 'Termin vereinbaren', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                Vereinbaren Sie einen Termin
            </div>
            <h1 class="text-4xl lg:text-6xl font-display font-black leading-tight mb-6">
                <span style="color: rgba(226, 235, 255, 1);">Kostenlose</span> <span style="color: rgba(147, 197, 253, 1);">Beratung</span> <span style="color: rgba(226, 235, 255, 1);">vereinbaren</span>
            </h1>
            <p class="text-lg text-white mb-8 leading-relaxed">
                Wählen Sie einen Termin, der zu Ihnen passt. Unsere Experten beantworten all Ihre Fragen zur Rückabwicklung, Geldanlage oder betrieblichen Altersversorgung.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12 mb-16">
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">schedule</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Flexible Zeiten</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Wählen Sie einen Zeitpunkt, der Ihrem Kalender entspricht – Mo-Fr 8:00-18:00 Uhr.</p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">videocall</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Video oder Telefon</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Entscheiden Sie selbst, ob Sie lieber persönlich sprechen oder per Video conferenzieren möchten.</p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">free_cancellation</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Kostenlos & Unverbindlich</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Ohne versteckte Gebühren oder Verpflichtungen – nur ein offenes Gespräch.</p>
            </div>
        </div>

        <div class="bg-gray-50 dark:bg-background-dark p-8 md:p-12 rounded-xl border border-gray-200 dark:border-gray-700 mb-12">
            <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-8 text-center">Online-Terminkalender</h2>

            <!-- Calendly Widget - Replace with your actual Calendly URL -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/rb-consulting/30min?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        </div>

        <div class="bg-blue-50 dark:bg-blue-900/20 p-8 rounded-xl border border-blue-200 dark:border-blue-800">
            <h3 class="font-bold text-gray-900 dark:text-white mb-4">Wichtiger Hinweis zu Calendly</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                Der Terminkalender wird mit dem Standard-Calendly-Widget angezeigt. Um Ihre eigenen Termine und Verfügbarkeiten zu verbinden, benötigen Sie:
            </p>
            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-400 text-sm">
                <li>Ein Calendly-Konto erstellen auf <a href="https://calendly.com" target="_blank" class="text-primary hover:underline">calendly.com</a></li>
                <li>Ihre Verfügbarkeiten einrichten</li>
                <li>Ersetzen Sie die URL <code class="bg-gray-200 dark:bg-gray-800 px-2 py-1 rounded text-xs">https://calendly.com/rb-consulting/30min</code> mit Ihrer persönlichen Calendly-URL in der Datei</li>
            </ol>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Was passiert beim Termin?</h2>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Vorstellung</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Wir lernen Ihre Situation kennen und besprechen Ihre Ziele.</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Beratung</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Wir erklären Ihre Optionen und beantworten alle Fragen.</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Nächste Schritte</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Gemeinsam planen wir, wie es weitergeht.</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Ohne Druck</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Keine Verpflichtungen – nur hilfreiche Beratung.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Vorbereitung auf Ihren Termin</h2>
            <p class="text-gray-600 dark:text-gray-400">Um den Termin optimal zu nutzen, bereiten Sie bitte folgende Unterlagen vor</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-gray-50 dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary flex-shrink-0 mt-1">document_scanner</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Bei Rückabwicklung</h3>
                        <ul class="text-gray-600 dark:text-gray-400 text-sm space-y-1">
                            <li>• Versicherungsschein</li>
                            <li>• Widerrufsbelehrung</li>
                            <li>• Allgemeine Bedingungen (falls vorhanden)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary flex-shrink-0 mt-1">savings</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Bei Geldanlage</h3>
                        <ul class="text-gray-600 dark:text-gray-400 text-sm space-y-1">
                            <li>• Aktuelles Sparbuch oder Kontoauszug</li>
                            <li>• Informationen zu bestehenden Anlagen</li>
                            <li>• Ihre Ziele und Zeitrahmen</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary flex-shrink-0 mt-1">business</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Bei BAV</h3>
                        <ul class="text-gray-600 dark:text-gray-400 text-sm space-y-1">
                            <li>• Aktueller BAV-Vertrag</li>
                            <li>• Versorgungsordnung</li>
                            <li>• Kostenstruktur</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="flex items-start gap-4">
                    <span class="material-icons text-primary flex-shrink-0 mt-1">help</span>
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Ganz Allgemein</h3>
                        <ul class="text-gray-600 dark:text-gray-400 text-sm space-y-1">
                            <li>• Steuernummer / ID (optional)</li>
                            <li>• Offene Fragen aufschreiben</li>
                            <li>• Zeit für ca. 30-60 Min. einplanen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Lieber ein Kontaktformular ausfüllen?</h2>
                <p class="text-gray-600 dark:text-gray-400">Schreiben Sie uns eine Nachricht und wir kontaktieren Sie schnellstmöglich.</p>
            </div>
            <a href="{{ route('kontakt.formular') }}" class="bg-primary hover:bg-blue-800 text-white px-8 py-3 rounded shadow transition font-semibold whitespace-nowrap">
                Kontaktformular
            </a>
        </div>
    </div>
</section>
@endsection
