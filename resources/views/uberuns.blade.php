@extends('layouts.app')

@section('title', 'Über uns')

@section('content')
<header class="relative bg-surface-light dark:bg-surface-dark overflow-hidden" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 space-y-6 relative">
            <!-- Faded white background for text area -->
            <div class="absolute -inset-8 bg-white/15 dark:bg-gray-900/30 rounded-3xl -z-10 blur-2xl"></div>

            <div class="inline-block px-3 py-1 bg-secondary/20 dark:bg-secondary/10 text-primary-dark dark:text-secondary rounded-full text-sm font-semibold tracking-wide uppercase">
                Experten für Finanzen &amp; Versicherung
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight drop-shadow-lg">
                <span style="color: rgba(226, 235, 255, 1);">Kompetenz.</span><br/>
                <span class="text-primary">Vertrauen.</span><br/>
                <span style="color: rgba(226, 235, 255, 1);">Erfolg.</span>
            </h1>
            <p class="text-xl text-white max-w-lg leading-relaxed drop-shadow">
                Seit über 20 Jahren Ihr verlässlicher Partner in Baden-Württemberg. Wir entwickeln maßgeschneiderte Finanzstrategien, die Ihre Zukunft sichern.
            </p>
            <div class="pt-4 flex flex-wrap gap-4">
                <a href="{{ route('kontakt') }}" class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-lg font-medium shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-1 flex items-center">
                    <span class="material-icons mr-2">calendar_today</span> Termin vereinbaren
                </a>
            </div>
        </div>
        <div class="w-full md:w-1/2 mt-12 md:mt-0 flex justify-center md:justify-end relative">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-primary to-secondary opacity-20 rounded-2xl blur-xl"></div>
                <img alt="Consultant portrait" class="relative rounded-2xl shadow-2xl max-w-sm w-full object-cover border-4 border-white dark:border-gray-800 z-10" src="/photos/personal2.png"/>
                <div class="absolute -bottom-6 -left-6 bg-white dark:bg-surface-dark p-4 rounded-lg shadow-xl border-l-4 border-secondary z-20 max-w-[200px]">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="material-icons text-secondary">star</span>
                        <span class="material-icons text-secondary">star</span>
                        <span class="material-icons text-secondary">star</span>
                        <span class="material-icons text-secondary">star</span>
                        <span class="material-icons text-secondary">star</span>
                    </div>
                    <p class="text-sm font-bold text-gray-900 dark:text-white">Exzellente Beratung</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Basierend auf 150+ Bewertungen</p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-16 bg-gray-50 dark:bg-gray-900 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-24 relative z-30">
            <div class="group bg-white dark:bg-surface-dark p-8 rounded-xl shadow-lg border-t-4 border-primary hover:shadow-xl transition-all duration-300 relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-primary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-primary text-3xl">verified_user</span>
                </div>
                <h3 class="text-xl font-bold font-display text-gray-900 dark:text-white mb-3 relative z-10">Unabhängige Beratung</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed relative z-10">
                    Wir sind an keine Gesellschaft gebunden. Unsere Empfehlungen basieren rein auf Ihren individuellen Bedürfnissen und Zielen.
                </p>
            </div>
            <div class="group bg-white dark:bg-surface-dark p-8 rounded-xl shadow-lg border-t-4 border-secondary hover:shadow-xl transition-all duration-300 relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-secondary dark:text-secondary text-3xl">trending_up</span>
                </div>
                <h3 class="text-xl font-bold font-display text-gray-900 dark:text-white mb-3 relative z-10">Nachhaltiger Vermögensaufbau</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed relative z-10">
                    Strategien, die langfristig funktionieren. Wir setzen auf bewährte Methoden kombiniert mit modernen Analysetools.
                </p>
            </div>
            <div class="group bg-white dark:bg-surface-dark p-8 rounded-xl shadow-lg border-t-4 border-primary hover:shadow-xl transition-all duration-300 relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-primary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-primary text-3xl">handshake</span>
                </div>
                <h3 class="text-xl font-bold font-display text-gray-900 dark:text-white mb-3 relative z-10">Persönlich vor Ort</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed relative z-10">
                    Verwurzelt in Baden-Württemberg. Wir schätzen den persönlichen Kontakt und sind für unsere Kunden in der Region da.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 border-t-4 border-l-4 border-secondary rounded-tl-3xl z-0"></div>
                <div class="absolute -bottom-4 -right-4 w-24 h-24 border-b-4 border-r-4 border-primary rounded-br-3xl z-0"></div>
                <img alt="Meeting in modern office" class="rounded-xl shadow-2xl relative z-10 w-full object-cover h-[500px]" src="/photos/uber2.png"/>
            </div>
            <div class="w-full lg:w-1/2 space-y-6">
                <h4 class="text-primary font-bold tracking-wider uppercase text-sm">Unsere Philosophie</h4>
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white">Mehr als nur Zahlen – <br/>es geht um Ihre Zukunft.</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    Als erfahrener Finanz- und Versicherungsexperte habe ich es mir zur Aufgabe gemacht, Licht in den Dschungel der Finanzprodukte zu bringen. Was mich antreibt, ist der Wunsch, meinen Mandanten echte Sicherheit und finanzielle Freiheit zu ermöglichen.
                </p>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    In einer Welt, die sich ständig wandelt, braucht es Konstanten. RB Consulting steht für Beständigkeit, Ehrlichkeit und transparente Beratung auf Augenhöhe.
                </p>
                <div class="grid grid-cols-2 gap-6 pt-6">
                    <div class="border-l-4 border-primary pl-4">
                        <span class="block text-3xl font-bold text-gray-900 dark:text-white">25+</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Jahre Erfahrung</span>
                    </div>
                    <div class="border-l-4 border-secondary pl-4">
                        <span class="block text-3xl font-bold text-gray-900 dark:text-white">1.000+</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Zufriedene Mandanten</span>
                    </div>
                </div>
                <div class="pt-6">
                    <a class="text-primary dark:text-secondary font-semibold flex items-center hover:underline group" href="{{ route('kontakt') }}">
                        Mehr über meine Qualifikationen erfahren
                        <span class="material-icons ml-1 transform group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-primary dark:bg-surface-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-display font-bold mb-4">Umfassende Lösungen für jede Lebensphase</h2>
        <p class="text-blue-100 dark:text-gray-300 max-w-2xl mx-auto mb-16 text-lg">
            Ob privater Vermögensaufbau, betriebliche Altersvorsorge oder umfassender Risikoschutz – wir haben das passende Konzept.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 p-8 rounded-xl hover:bg-white/20 dark:hover:bg-gray-700 hover:border-secondary/50 transition-all duration-300 text-left cursor-pointer hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="h-12 w-12 bg-secondary rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform relative z-10">
                    <span class="material-icons text-primary-dark text-2xl">account_balance</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white relative z-10">Vermögensaufbau</h3>
                <p class="text-blue-100 dark:text-gray-300 text-sm mb-4 relative z-10">Intelligente Anlagestrategien für langfristigen Werterhalt und Wachstum.</p>
                <span class="text-secondary text-sm font-semibold flex items-center relative z-10 group-hover:translate-x-1 transition-transform">Details <span class="material-icons text-sm ml-1">chevron_right</span></span>
            </div>
            <div class="group bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 p-8 rounded-xl hover:bg-white/20 dark:hover:bg-gray-700 hover:border-secondary/50 transition-all duration-300 text-left cursor-pointer hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="h-12 w-12 bg-secondary rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform relative z-10">
                    <span class="material-icons text-primary-dark text-2xl">security</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white relative z-10">Versicherungs-Check</h3>
                <p class="text-blue-100 dark:text-gray-300 text-sm mb-4 relative z-10">Optimierung Ihres bestehenden Portfolios auf Preis und Leistung.</p>
                <span class="text-secondary text-sm font-semibold flex items-center relative z-10 group-hover:translate-x-1 transition-transform">Details <span class="material-icons text-sm ml-1">chevron_right</span></span>
            </div>
            <div class="group bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 p-8 rounded-xl hover:bg-white/20 dark:hover:bg-gray-700 hover:border-secondary/50 transition-all duration-300 text-left cursor-pointer hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="h-12 w-12 bg-secondary rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform relative z-10">
                    <span class="material-icons text-primary-dark text-2xl">business_center</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white relative z-10">Firmenkunden</h3>
                <p class="text-blue-100 dark:text-gray-300 text-sm mb-4 relative z-10">Betriebliche Vorsorgekonzepte und gewerbliche Sachversicherungen.</p>
                <span class="text-secondary text-sm font-semibold flex items-center relative z-10 group-hover:translate-x-1 transition-transform">Details <span class="material-icons text-sm ml-1">chevron_right</span></span>
            </div>
        </div>
        <div class="mt-12">
            <a href="{{ route('kontakt') }}" class="border-2 border-white dark:border-secondary text-white dark:text-secondary hover:bg-white hover:text-primary dark:hover:bg-secondary dark:hover:text-primary-dark px-8 py-3 rounded-full font-bold transition-all">
                Alle Leistungen ansehen
            </a>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50 dark:bg-background-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 mb-6 block">format_quote</span>
        <h3 class="text-2xl md:text-3xl font-display font-medium text-gray-900 dark:text-white mb-8 italic leading-relaxed">
            "Endlich habe ich das Gefühl, meine Finanzen wirklich zu verstehen. Die Beratung bei RB Consulting war nicht nur fachlich top, sondern auch menschlich sehr angenehm. Kein Verkaufsdruck, sondern echte Lösungen."
        </h3>
        <div class="flex items-center justify-center gap-4">
            <img alt="Customer" class="w-14 h-14 rounded-full object-cover border-2 border-primary dark:border-secondary" src="/photos/customer1.png"/>
            <div class="text-left">
                <p class="font-bold text-gray-900 dark:text-white">Thomas Müller</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Unternehmer aus Ellwangen</p>
            </div>
        </div>
        <div class="flex justify-center gap-4 mt-8">
            <button class="p-2 rounded-full border border-gray-300 dark:border-gray-600 hover:border-primary dark:hover:border-secondary text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-secondary transition-colors">
                <span class="material-icons block">chevron_left</span>
            </button>
            <button class="p-2 rounded-full border border-gray-300 dark:border-gray-600 hover:border-primary dark:hover:border-secondary text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-secondary transition-colors">
                <span class="material-icons block">chevron_right</span>
            </button>
        </div>
    </div>
</section>

<section class="relative py-20 bg-white dark:bg-surface-dark overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-gray-900 to-gray-800 dark:from-gray-800 dark:to-gray-900 rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
            <div class="p-10 md:w-3/5 text-white flex flex-col justify-center">
                <h2 class="text-3xl font-display font-bold mb-4">Lassen Sie uns sprechen.</h2>
                <p class="text-gray-300 mb-8 max-w-md">
                    Der erste Schritt zu finanzieller Klarheit ist ein unverbindliches Gespräch. Kontaktieren Sie uns für eine kostenfreie Erstberatung.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <span class="material-icons">phone</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide">Rufen Sie uns an</p>
                            <p class="font-bold text-lg">+49 7961 123456</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <span class="material-icons">email</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide">Schreiben Sie uns</p>
                            <p class="font-bold text-lg">info@rb-consulting.de</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/5 bg-primary relative">
                <img alt="Team working" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30" src="/photos/team-working.png"/>
                <div class="relative z-10 h-full flex flex-col justify-center p-10 bg-primary/90">
                    <h3 class="text-xl font-bold text-white mb-4">Kontaktformular</h3>
                    <form class="space-y-4" id="callbackForm">
                        @csrf
                        <div>
                            <input class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white placeholder-white/60 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors" placeholder="Ihr Name" type="text" name="name" required/>
                        </div>
                        <div>
                            <input class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white placeholder-white/60 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors" placeholder="Ihre E-Mail" type="email" name="email" required/>
                        </div>
                        <button class="w-full bg-secondary hover:bg-white text-primary-dark font-bold py-3 rounded-lg transition-colors shadow-lg" type="submit">
                            Nachricht senden
                        </button>
                        <div id="formMessage" class="text-sm font-semibold text-white hidden mt-2 p-2 rounded"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('callbackForm');

    if (!form) {
        console.log('Form not found');
        return;
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        console.log('Form submitted');

        const nameInput = form.querySelector('input[name="name"]');
        const emailInput = form.querySelector('input[name="email"]');
        const submitBtn = form.querySelector('button[type="submit"]');
        const messageDiv = document.getElementById('formMessage');

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();

        if (!name || !email) {
            messageDiv.classList.remove('hidden');
            messageDiv.textContent = 'Bitte füllen Sie alle Felder aus.';
            messageDiv.classList.add('bg-red-600');
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
            messageDiv.classList.add('bg-red-600');
            messageDiv.classList.remove('bg-green-600');
            return;
        }

        // Disable button and show loading state
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
                body: JSON.stringify({ name, email })
            });

            console.log('Response status:', response.status);

            const data = await response.json();
            console.log('Response data:', data);

            messageDiv.classList.remove('hidden');

            if (response.ok) {
                messageDiv.textContent = 'Danke! Wir werden Sie in Kürze kontaktieren.';
                messageDiv.classList.add('bg-green-600');
                messageDiv.classList.remove('bg-red-600');

                // Clear inputs
                nameInput.value = '';
                emailInput.value = '';

                // Reset button after 3 seconds
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }, 3000);
            } else {
                messageDiv.textContent = data.message || 'Fehler beim Senden. Bitte versuchen Sie es später erneut.';
                messageDiv.classList.add('bg-red-600');
                messageDiv.classList.remove('bg-green-600');
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        } catch (error) {
            console.error('Error:', error);
            messageDiv.classList.remove('hidden');
            messageDiv.textContent = 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.';
            messageDiv.classList.add('bg-red-600');
            messageDiv.classList.remove('bg-green-600');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
});
</script>
@endsection
