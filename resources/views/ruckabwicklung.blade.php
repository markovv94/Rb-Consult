@extends('layouts.app')

@section('title', 'Rückabwicklung Übersicht')

@section('content')
<div class="relative bg-surface-light dark:bg-surface-dark overflow-hidden pt-20">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-surface-light dark:bg-surface-dark sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-gradient-to-br from-white/40 via-blue-50/30 to-transparent dark:from-background-dark/60 dark:via-blue-900/20 dark:to-transparent rounded-3xl -z-10 blur-2xl"></div>

                <div class="sm:text-center lg:text-left relative z-10">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl drop-shadow-lg">
                        <span class="block xl:inline">Mehr Geld aus Ihrer</span>
                        <span class="block text-primary">Lebensversicherung?</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 dark:text-gray-400 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 drop-shadow">
                        Holen Sie das Beste aus Ihrer Altersvorsorge heraus. Wir prüfen Ihre Verträge auf Rückabwicklungspotenzial. Spezialisiert für Kunden in Baden-Württemberg.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start gap-4 relative z-10">
                        <div class="rounded-md shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                            <a class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-blue-800 md:py-4 md:text-lg md:px-10 transition" href="{{ route('kontakt') }}">
                                Jetzt prüfen lassen
                            </a>
                        </div>
                        <div>
                            <a class="w-full flex items-center justify-center px-8 py-3 border-2 border-secondary text-base font-medium rounded-md text-gray-900 dark:text-white bg-secondary/20 hover:bg-secondary/30 md:py-4 md:text-lg md:px-10 transition hover:shadow-md" href="#benefits">
                                Mehr erfahren
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img alt="Consulting discussion meeting" class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/photos/discuss.jpeg"/>
        <div class="absolute inset-0 bg-gradient-to-l from-transparent to-surface-light dark:to-surface-dark lg:w-1/2"></div>
    </div>
</div>

<section class="py-16 bg-white dark:bg-gray-800 transition-colors duration-300" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="relative">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Schön, dass wir uns kennenlernen!
                </h2>
                <p class="mt-4 text-lg text-white">
                    Als erfahrener Partner im Bereich Finanz- und Versicherungsberatung in Baden-Württemberg stehe ich Ihnen zur Seite. Viele Altverträge beinhalten Fehler in der Widerrufsbelehrung, die Ihnen heute bares Geld bringen können.
                </p>
                <div class="mt-6 flex items-center">
                    <span class="material-icons text-primary mr-2">phone_in_talk</span>
                    <span class="text-lg font-bold text-gray-900 dark:text-white">0711 123 456 78</span>
                </div>
                <div class="mt-4">
                    <button id="togglePhoneCallbackForm" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600">
                        Rückruf vereinbaren
                    </button>
                </div>

                <!-- Phone Callback Form -->
                <div id="phoneCallbackFormContainer" class="hidden mt-6 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg border border-gray-200 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Rückruf vereinbaren</h3>
                    <form id="phoneCallbackForm" class="space-y-4">
                        @csrf
                        <div>
                            <label for="phoneName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="phoneName" name="name" required class="mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white bg-white dark:bg-gray-600 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary"/>
                        </div>
                        <div>
                            <label for="phoneNumber" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Telefonnummer</label>
                            <input type="tel" id="phoneNumber" name="phone" required class="mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white bg-white dark:bg-gray-600 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary"/>
                        </div>
                        <button type="submit" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Senden
                        </button>
                    </form>
                    <div id="phoneCallbackMessage" class="mt-4 hidden p-4 rounded-md text-sm"></div>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 relative">
                <div class="relative rounded-lg shadow-xl overflow-hidden max-w-sm mx-auto border-4 border-secondary">
                    <img alt="Erfahrener Berater Portrait" class="w-full object-cover" src="/photos/personal2.png"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-primary bg-opacity-90 p-4">
                        <p class="text-white font-bold text-center">Ihr Experte für Rückabwicklungen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-to-r from-primary/5 via-secondary/5 to-primary/5 dark:from-surface-dark dark:via-surface-dark dark:to-surface-dark py-12 border-y border-secondary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <div class="group flex p-6 rounded-lg hover:bg-white/50 dark:hover:bg-gray-800/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex-shrink-0 relative z-10">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white group-hover:scale-110 transition-transform">
                        <span class="material-icons">account_balance_wallet</span>
                    </div>
                </div>
                <div class="ml-4 relative z-10">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Mehr Kapital zurückerhalten</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-300">
                        Durch eine erfolgreiche Rückabwicklung erhalten Sie oft mehr als den aktuellen Rückkaufswert. Wir prüfen Ihre Ansprüche detailliert.
                    </p>
                </div>
            </div>
            <div class="group flex p-6 rounded-lg hover:bg-white/50 dark:hover:bg-gray-800/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="flex-shrink-0 relative z-10">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white group-hover:scale-110 transition-transform">
                        <span class="material-icons">gavel</span>
                    </div>
                </div>
                <div class="ml-4 relative z-10">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Rechtliche Sicherheit</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-300">
                        Nutzen Sie die Urteile des BGH zu fehlerhaften Widerspruchsbelehrungen. Unser Netzwerk aus Fachanwälten unterstützt Sie.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative" id="benefits">
    <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
            <img alt="Team analyzing documents" class="h-56 w-full object-cover lg:absolute lg:h-full" src="/photos/team.jpeg"/>
        </div>
    </div>
    <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
        <div class="lg:col-start-2 lg:pl-8">
            <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                <h2 class="leading-6 text-secondary font-semibold tracking-wide uppercase">Warum uns wählen</h2>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Kompetenz in Sachen Wiederruf
                </h3>
                <p class="mt-8 text-lg text-gray-500 dark:text-gray-300">
                    Wir sind spezialisiert auf die Prüfung von Lebens- und Rentenversicherungen, die zwischen 1994 und 2007 abgeschlossen wurden. Hier liegen die größten Chancen.
                </p>
                <div class="mt-5 prose prose-indigo text-gray-500 dark:text-gray-300">
                    <ul class="list-none space-y-4">
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2">check_circle</span>
                            <span>Kostenlose Erstprüfung Ihrer Unterlagen</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2">check_circle</span>
                            <span>Kein Kostenrisiko durch Erfolgsbasis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2">check_circle</span>
                            <span>Persönliche Betreuung in Baden-Württemberg</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-green-500 mr-2">check_circle</span>
                            <span>Über 1.000 zufriedene Mandanten</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 text-center">
            <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                <p class="text-5xl font-extrabold text-secondary">12.500+</p>
                <p class="mt-2 text-lg font-medium text-white">Geprüfte Verträge</p>
            </div>
            <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                <p class="text-5xl font-extrabold text-secondary">1.000+</p>
                <p class="mt-2 text-lg font-medium text-white">Zufriedene Kunden</p>
            </div>
            <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                <p class="text-5xl font-extrabold text-secondary">100%</p>
                <p class="mt-2 text-lg font-medium text-white">Einsatz für Ihr Recht</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Unsere Dienstleistungen im Detail</h2>
            <p class="mt-4 text-gray-500 dark:text-gray-400">Transparenz und Klarheit für Ihre Finanzen</p>
        </div>
        <div class="space-y-12">
            <div class="flex flex-col md:flex-row gap-8 items-start border-b border-gray-200 dark:border-gray-700 pb-8">
                <div class="flex-shrink-0">
                    <span class="material-icons text-5xl text-primary">analytics</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Lebensversicherungs-Check</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Wir berechnen für Sie, ob sich eine Rückabwicklung (Widerspruch) mehr lohnt als eine Kündigung oder Beitragsfreistellung. Oftmals sind die Rückkaufswerte enttäuschend gering im Vergleich zu den eingezahlten Beiträgen plus Zinsen.
                    </p>
                    <a class="text-secondary font-semibold hover:text-yellow-600 inline-flex items-center" href="{{ route('kontakt') }}">
                        Mehr erfahren <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-8 items-start border-b border-gray-200 dark:border-gray-700 pb-8">
                <div class="flex-shrink-0">
                    <span class="material-icons text-5xl text-primary">savings</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Rentenversicherungs-Check</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Private Rentenversicherungen leiden oft unter hohen Kostenstrukturen. Wir prüfen, ob Sie durch einen Widerruf Ihre eingezahlten Prämien inklusive einer Nutzungsentschädigung zurückerhalten können.
                    </p>
                    <a class="text-secondary font-semibold hover:text-yellow-600 inline-flex items-center" href="{{ route('kontakt') }}">
                        Mehr erfahren <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="flex-shrink-0">
                    <span class="material-icons text-5xl text-primary">business</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Betriebliche Altersvorsorge-Check</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Auch für Firmen und Mitarbeiter bieten wir Analysen bestehender bAV-Verträge an. Optimieren Sie Ihre Versorgung und minimieren Sie Haftungsrisiken.
                    </p>
                    <a class="text-secondary font-semibold hover:text-yellow-600 inline-flex items-center" href="{{ route('kontakt') }}">
                        Mehr erfahren <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-white text-center mb-12">Was unsere Kunden sagen</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-8 shadow-lg relative transform transition hover:-translate-y-1 duration-300">
                <span class="absolute top-4 left-4 text-6xl text-secondary opacity-20 font-serif">"</span>
                <p class="text-gray-600 dark:text-gray-300 mb-6 mt-4 relative z-10">
                    "Ich hatte meine Lebensversicherung eigentlich schon abgeschrieben. Dank RB Consulting habe ich fast 8.000€ mehr bekommen als der Versicherer ursprünglich zahlen wollte."
                </p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-primary font-bold">M</div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Michael S.</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Stuttgart</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg p-8 shadow-lg relative transform transition hover:-translate-y-1 duration-300">
                <span class="absolute top-4 left-4 text-6xl text-secondary opacity-20 font-serif">"</span>
                <p class="text-gray-600 dark:text-gray-300 mb-6 mt-4 relative z-10">
                    "Sehr kompetente Beratung und reibungslose Abwicklung. Man merkt, dass hier Experten am Werk sind, die sich wirklich für die Mandanten einsetzen."
                </p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-primary font-bold">S</div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Sabine K.</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Karlsruhe</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg p-8 shadow-lg relative transform transition hover:-translate-y-1 duration-300">
                <span class="absolute top-4 left-4 text-6xl text-secondary opacity-20 font-serif">"</span>
                <p class="text-gray-600 dark:text-gray-300 mb-6 mt-4 relative z-10">
                    "Die Prüfung war kostenlos und das Ergebnis hat mich überzeugt. Ich kann den Service jedem empfehlen, der noch alte Verträge im Ordner hat."
                </p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-primary font-bold">T</div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Thomas B.</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Heidelberg</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('togglePhoneCallbackForm');
    const formContainer = document.getElementById('phoneCallbackFormContainer');
    const form = document.getElementById('phoneCallbackForm');
    const messageDiv = document.getElementById('phoneCallbackMessage');

    // Toggle form visibility
    toggleBtn.addEventListener('click', function() {
        formContainer.classList.toggle('hidden');
        if (!formContainer.classList.contains('hidden')) {
            form.reset();
            messageDiv.classList.add('hidden');
        }
    });

    // Handle form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const nameInput = document.getElementById('phoneName');
        const phoneInput = document.getElementById('phoneNumber');
        const submitBtn = form.querySelector('button[type="submit"]');

        // Get CSRF token
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

        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Wird gesendet...';

        try {
            const response = await fetch('/phone-callback', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
                body: JSON.stringify({
                    name: nameInput.value,
                    phone: phoneInput.value,
                }),
            });

            const data = await response.json();

            if (response.ok) {
                messageDiv.textContent = data.message;
                messageDiv.className = 'mt-4 p-4 rounded-md text-sm bg-green-50 dark:bg-green-900 text-green-800 dark:text-green-200';
                messageDiv.classList.remove('hidden');
                nameInput.value = '';
                phoneInput.value = '';
            } else {
                const errorMessage = data.message || 'Es gab einen Fehler beim Senden des Formulars.';
                messageDiv.textContent = errorMessage;
                messageDiv.className = 'mt-4 p-4 rounded-md text-sm bg-red-50 dark:bg-red-900 text-red-800 dark:text-red-200';
                messageDiv.classList.remove('hidden');
            }
        } catch (error) {
            messageDiv.textContent = 'Fehler: ' + error.message;
            messageDiv.className = 'mt-4 p-4 rounded-md text-sm bg-red-50 dark:bg-red-900 text-red-800 dark:text-red-200';
            messageDiv.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
});
</script>
@endsection
