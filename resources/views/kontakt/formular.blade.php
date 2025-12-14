@extends('layouts.app')

@section('title', 'Kontaktformular - RB Consulting')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Kontakt', 'url' => route('kontakt')],
    ['name' => 'Kontaktformular', 'url' => null]
]])
@endcomponent

<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                Kontakt mit uns aufnehmen
            </div>
            <h1 class="text-4xl lg:text-6xl font-display font-black leading-tight mb-6">
                <span style="color: rgba(226, 235, 255, 1);">Schreiben Sie uns</span> <span style="color: rgba(147, 197, 253, 1);">eine Nachricht</span>
            </h1>
            <p class="text-lg text-white mb-8 leading-relaxed">
                Haben Sie Fragen oder möchten mehr über unsere Dienstleistungen erfahren? Füllen Sie einfach das Formular aus und wir melden uns bald bei Ihnen.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12 mb-16">
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">email</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Email</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    <a href="mailto:info@rb-consulting.de" class="hover:text-primary transition">info@rb-consulting.de</a>
                </p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">phone</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Telefon</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    <a href="tel:+49711123456" class="hover:text-primary transition">+49 711 123 456</a>
                </p>
            </div>
            <div class="text-center">
                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary text-white mb-4">
                    <span class="material-icons">location_on</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Büro</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Musterstraße 123<br/>70173 Stuttgart
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('kontakt.submit') }}" class="bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-700">
            @csrf

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-900">
                    <h4 class="font-bold text-red-800 dark:text-red-300 mb-2">Fehler im Formular</h4>
                    <ul class="text-red-700 dark:text-red-400 text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-900">
                    <p class="text-green-800 dark:text-green-300 font-semibold">{{ session('success') }}</p>
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="first-name" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Vorname *</label>
                    <input
                        type="text"
                        name="first-name"
                        id="first-name"
                        value="{{ old('first-name') }}"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition"
                        placeholder="Ihr Vorname"
                        required
                    />
                    @error('first-name')
                        <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Nachname *</label>
                    <input
                        type="text"
                        name="last-name"
                        id="last-name"
                        value="{{ old('last-name') }}"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition"
                        placeholder="Ihr Nachname"
                        required
                    />
                    @error('last-name')
                        <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Email-Adresse *</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition"
                    placeholder="ihre@email.de"
                    required
                />
                @error('email')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="subject" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Betreff *</label>
                <input
                    type="text"
                    name="subject"
                    id="subject"
                    value="{{ old('subject') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition"
                    placeholder="Worum geht es?"
                    required
                />
                @error('subject')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="message" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Nachricht *</label>
                <textarea
                    name="message"
                    id="message"
                    rows="6"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition"
                    placeholder="Ihre Nachricht..."
                    required
                >{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="flex items-start gap-3">
                    <input
                        type="checkbox"
                        name="privacy"
                        value="1"
                        {{ old('privacy') ? 'checked' : '' }}
                        class="mt-1 w-4 h-4 text-primary bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded focus:ring-2 focus:ring-primary/20 transition cursor-pointer"
                        required
                    />
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                        Ich akzeptiere die <a href="#" class="text-primary hover:text-blue-800 dark:hover:text-blue-300">Datenschutzerklärung</a> und erlaube RB Consulting, meine Daten zur Kontaktaufnahme zu verwenden. *
                    </span>
                </label>
                @error('privacy')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-primary hover:bg-blue-800 text-white px-8 py-4 rounded-lg shadow transition font-semibold flex items-center justify-center gap-2"
            >
                Nachricht senden
                <span class="material-icons text-lg">send</span>
            </button>

            <p class="text-xs text-gray-600 dark:text-gray-400 mt-4 text-center">
                Mit * gekennzeichnete Felder sind erforderlich.
            </p>
        </form>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Häufig gestellte Fragen</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Wie schnell antwortet ihr?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Wir bemühen uns, alle Anfragen innerhalb von 24 Stunden zu beantworten. Bei dringenden Fragen rufen Sie uns gerne direkt an.
                </p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Ist die Beratung wirklich kostenlos?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Ja, die erste Beratung ist völlig kostenlos und unverbindlich. Wir verdienen nur, wenn wir erfolgreich sind.
                </p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Müssen wir uns persönlich treffen?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Nein, wir bieten Telefon- und Videoberatung an. Persönliche Meetings sind natürlich auch möglich.
                </p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Welche Versicherungen prüft ihr?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Wir prüfen Lebensversicherungen, Rentenversicherungen und andere Altverträge mit Widerrufsbelehrungen.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-inner border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Lieber einen Termin vereinbaren?</h2>
                <p class="text-gray-600 dark:text-gray-400">Wählen Sie einen Zeitpunkt aus unserem Kalender.</p>
            </div>
            <a href="{{ route('kontakt.termin') }}" class="bg-primary hover:bg-blue-800 text-white px-8 py-3 rounded shadow transition font-semibold whitespace-nowrap">
                Termin buchen
            </a>
        </div>
    </div>
</section>
@endsection
