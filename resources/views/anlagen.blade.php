@extends('layouts.app')

@section('title', 'Anlagen Übersicht')

@section('content')
<header class="relative bg-gray-900 h-[500px] flex items-center">
    <div class="absolute inset-0 z-0 overflow-hidden">
        <img alt="Financial graphs background" class="w-full h-full object-cover opacity-30" src="/photos/graph.png"/>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-gray-900/80 z-10"></div>
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 relative p-8 lg:p-10 rounded-2xl bg-gray-900/85 backdrop-blur-sm shadow-lg border border-white/20">
            <!-- Gradient overlay mask behind text -->
            <div class="absolute -inset-8 bg-gradient-to-br from-white/20 via-secondary/10 to-transparent dark:from-white/10 dark:via-secondary/5 dark:to-transparent rounded-3xl -z-10 blur-2xl"></div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-white mb-4 drop-shadow-lg">
                Vermögensaufbau mit <span class="bg-gradient-to-r from-secondary to-yellow-300 bg-clip-text text-transparent">Strategie</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl drop-shadow">
                Maßgeschneiderte Anlagelösungen für Ihre finanzielle Zukunft in Baden-Württemberg. Von kurzfristigen Zielen bis zur langfristigen Altersvorsorge.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="{{ route('kontakt') }}" class="bg-secondary hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-md shadow-lg transform hover:-translate-y-1 transition duration-300 flex items-center justify-center">
                    <span class="material-icons mr-2">calendar_today</span> Termin vereinbaren
                </a>
                <button class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white font-bold py-3 px-8 rounded-md transition duration-300 flex items-center justify-center">
                    Mehr erfahren
                </button>
            </div>
        </div>
        <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center md:justify-end">
            <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full border-4 border-secondary overflow-hidden shadow-2xl">
                <img alt="Ihr Finanzberater" class="w-full h-full object-cover object-top" src="/photos/personal1.png"/>
            </div>
        </div>
    </div>
</header>

<section class="py-16 bg-surface-light dark:bg-surface-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-display font-bold text-primary dark:text-blue-400 mb-4">Warum RB Consulting?</h2>
            <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto text-lg leading-relaxed">
                Als Ihr Partner für Finanzen und Versicherungen in Baden-Württemberg legen wir Wert auf Transparenz, Sicherheit und Rendite. Wir analysieren Ihre individuelle Situation und bieten Ihnen Lösungen, die genau zu Ihren Lebenszielen passen.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border-t-4 border-secondary hover:shadow-xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900 rounded-full flex items-center justify-center mb-6 mx-auto relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-primary dark:text-blue-300 text-3xl">trending_up</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-3 relative z-10">Maximale Rendite</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center relative z-10">Optimierte Anlagestrategien, die Ihr Kapital effizient für Sie arbeiten lassen.</p>
            </div>
            <div class="group bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border-t-4 border-secondary hover:shadow-xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900 rounded-full flex items-center justify-center mb-6 mx-auto relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-primary dark:text-blue-300 text-3xl">security</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-3 relative z-10">Sicherheit</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center relative z-10">Fundierte Risikoanalysen und diversifizierte Portfolios zum Schutz Ihres Vermögens.</p>
            </div>
            <div class="group bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border-t-4 border-secondary hover:shadow-xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900 rounded-full flex items-center justify-center mb-6 mx-auto relative z-10 group-hover:scale-110 transition-transform">
                    <span class="material-icons text-primary dark:text-blue-300 text-3xl">handshake</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-3 relative z-10">Persönliche Betreuung</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center relative z-10">Direkter Ansprechpartner vor Ort in Baden-Württemberg und individuelle Beratung.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-100 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-display font-bold text-center text-gray-900 dark:text-white mb-12">
            Unsere <span class="text-primary dark:text-blue-400">Anlagelösungen</span> im Überblick
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-2 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-8 flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-gray-900 dark:text-white">Festgeld &amp; Tagesgeld</h3>
                            <p class="text-sm font-semibold text-secondary uppercase tracking-wider mt-1">Kurzfristig &amp; Sicher</p>
                        </div>
                        <span class="bg-blue-100 dark:bg-blue-900 text-primary dark:text-blue-200 text-xs font-bold px-3 py-1 rounded-full">Sicherheitsorientiert</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Ideal für Rücklagen, auf die Sie kurzfristig zugreifen müssen oder als sicherer Parkplatz für Ihr Kapital. Profitieren Sie von attraktiven Zinsen ohne Kursrisiko.
                    </p>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 mb-6">
                        <div class="flex items-center mb-2">
                            <span class="material-icons text-secondary mr-2 text-sm">schedule</span>
                            <span class="text-sm font-bold text-gray-700 dark:text-gray-300">Anlagehorizont:</span>
                            <span class="text-sm text-gray-600 dark:text-gray-400 ml-2">6 - 12 Monate</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-icons text-secondary mr-2 text-sm">savings</span>
                            <span class="text-sm font-bold text-gray-700 dark:text-gray-300">Geeignet für:</span>
                            <span class="text-sm text-gray-600 dark:text-gray-400 ml-2">Notgroschen, kurzfristige Sparziele</span>
                        </div>
                    </div>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Feste Verzinsung über die Laufzeit</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Einlagensicherung bis 100.000€</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 px-8 py-4 border-t border-gray-100 dark:border-gray-700">
                    <a class="text-primary dark:text-blue-400 font-bold hover:text-blue-700 dark:hover:text-blue-300 flex items-center group" href="{{ route('kontakt') }}">
                        Details ansehen <span class="material-icons ml-1 transform group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>

            <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 relative border-2 border-secondary">
                <div class="absolute top-0 right-0 bg-secondary text-white text-xs font-bold px-3 py-1 rounded-bl-lg z-10">EMPFEHLUNG</div>
                <div class="h-2 bg-gradient-to-r from-secondary to-yellow-300"></div>
                <div class="p-8 flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-gray-900 dark:text-white">Investmentpolicen (Nettopolice)</h3>
                            <p class="text-sm font-semibold text-secondary uppercase tracking-wider mt-1">Mittel- bis Langfristig</p>
                        </div>
                        <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs font-bold px-3 py-1 rounded-full">Renditestark</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Die intelligente Art der Vermögensbildung. Nutzen Sie steuerliche Vorteile und kostengünstige ETF-Strukturen für einen effektiven Vermögensaufbau ohne Ausgabeaufschläge.
                    </p>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 mb-6">
                        <div class="flex items-center mb-2">
                            <span class="material-icons text-secondary mr-2 text-sm">schedule</span>
                            <span class="text-sm font-bold text-gray-700 dark:text-gray-300">Anlagehorizont:</span>
                            <span class="text-sm text-gray-600 dark:text-gray-400 ml-2">3 - 15+ Jahre</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-icons text-secondary mr-2 text-sm">savings</span>
                            <span class="text-sm font-bold text-gray-700 dark:text-gray-300">Geeignet für:</span>
                            <span class="text-sm text-gray-600 dark:text-gray-400 ml-2">Vermögensaufbau, Altersvorsorge</span>
                        </div>
                    </div>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Steuerbegünstigte Auszahlung (Halbeinkünfteverfahren)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Keine Abschluss- &amp; Vertriebskosten (Nettotarife)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Flexible Zuzahlungen und Entnahmen</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 px-8 py-4 border-t border-gray-100 dark:border-gray-700">
                    <a class="text-primary dark:text-blue-400 font-bold hover:text-blue-700 dark:hover:text-blue-300 flex items-center group" href="{{ route('kontakt') }}">
                        Kostenloses Angebot anfordern <span class="material-icons ml-1 transform group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-primary dark:bg-blue-900 text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 -mt-10 -ml-10 w-40 h-40 bg-white opacity-10 rounded-full"></div>
    <div class="absolute bottom-0 right-0 -mb-10 -mr-10 w-40 h-40 bg-secondary opacity-20 rounded-full"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">Lassen Sie uns über Ihre Zukunft sprechen</h2>
        <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
            Vereinbaren Sie jetzt ein unverbindliches Erstgespräch. Wir analysieren Ihre aktuelle Situation und zeigen Ihnen Potenziale auf – ob vor Ort in Baden-Württemberg oder digital.
        </p>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-8 shadow-2xl max-w-lg mx-auto text-left">
            <form id="anlagenForm">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" for="name">Name</label>
                    <input class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 shadow-sm focus:border-secondary focus:ring focus:ring-secondary focus:ring-opacity-50" id="name" name="name" placeholder="Max Mustermann" type="text" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" for="email">E-Mail Adresse</label>
                    <input class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 shadow-sm focus:border-secondary focus:ring focus:ring-secondary focus:ring-opacity-50" id="email" name="email" placeholder="max@beispiel.de" type="email" required/>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" for="interest">Interesse an</label>
                    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:border-secondary focus:ring focus:ring-secondary focus:ring-opacity-50" id="interest" name="interest" required>
                        <option value="">-- Bitte wählen --</option>
                        <option value="Allgemeine Anlageberatung">Allgemeine Anlageberatung</option>
                        <option value="Nettopolice / Investmentpolice">Nettopolice / Investmentpolice</option>
                        <option value="Tagesgeld / Festgeld">Tagesgeld / Festgeld</option>
                        <option value="Altersvorsorge">Altersvorsorge</option>
                    </select>
                </div>
                <button class="w-full bg-secondary hover:bg-yellow-600 text-white font-bold py-3 rounded-md transition duration-300 shadow-md" type="submit">
                    Jetzt Gespräch anfragen
                </button>
                <div id="anlagenFormMessage" class="text-sm font-semibold mt-3 p-2 rounded hidden"></div>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-4 text-center">
                    Ihre Daten werden vertraulich behandelt und nur zur Kontaktaufnahme genutzt.
                </p>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('anlagenForm');

    if (!form) {
        return;
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const nameInput = form.querySelector('input[name="name"]');
        const emailInput = form.querySelector('input[name="email"]');
        const interestSelect = form.querySelector('select[name="interest"]');
        const submitBtn = form.querySelector('button[type="submit"]');
        const messageDiv = document.getElementById('anlagenFormMessage');

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const interest = interestSelect.value.trim();

        if (!name || !email || !interest) {
            messageDiv.classList.remove('hidden');
            messageDiv.textContent = 'Bitte füllen Sie alle Felder aus.';
            messageDiv.classList.add('bg-red-600', 'text-white');
            messageDiv.classList.remove('bg-green-600');
            return;
        }

        // Get CSRF token - try multiple ways
        let token = null;
        const metaToken = document.querySelector('meta[name="csrf-token"]');
        if (metaToken) {
            token = metaToken.getAttribute('content');
        }
        if (!token) {
            const inputToken = form.querySelector('input[name="_token"]');
            if (inputToken) {
                token = inputToken.value;
            }
        }

        if (!token) {
            console.error('CSRF token not found');
            messageDiv.classList.remove('hidden');
            messageDiv.textContent = 'Sicherheitsfehler. Bitte versuchen Sie es später erneut.';
            messageDiv.classList.add('bg-red-600', 'text-white');
            messageDiv.classList.remove('bg-green-600');
            return;
        }

        submitBtn.disabled = true;
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Wird gesendet...';

        try {
            const response = await fetch('{{ route("callback.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ name, email, interest })
            });

            const data = await response.json();

            messageDiv.classList.remove('hidden');

            if (response.ok) {
                messageDiv.textContent = 'Danke! Wir werden Sie in Kürze kontaktieren.';
                messageDiv.classList.add('bg-green-600', 'text-white');
                messageDiv.classList.remove('bg-red-600');

                nameInput.value = '';
                emailInput.value = '';
                interestSelect.value = '';

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }, 3000);
            } else {
                messageDiv.textContent = data.message || 'Fehler beim Senden. Bitte versuchen Sie es später erneut.';
                messageDiv.classList.add('bg-red-600', 'text-white');
                messageDiv.classList.remove('bg-green-600');
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        } catch (error) {
            console.error('Error:', error);
            messageDiv.classList.remove('hidden');
            messageDiv.textContent = 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.';
            messageDiv.classList.add('bg-red-600', 'text-white');
            messageDiv.classList.remove('bg-green-600');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
});
</script>
@endsection
