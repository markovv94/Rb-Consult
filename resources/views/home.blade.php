@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-background-dark dark:to-blue-900/20" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50/15 to-blue-50/15 dark:from-background-dark/15 dark:to-blue-900/5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 text-center lg:text-left relative">
                <!-- Gradient overlay mask behind text -->
                <div class="absolute -inset-8 bg-gradient-to-br from-white/40 via-blue-50/30 to-transparent dark:from-background-dark/60 dark:via-blue-900/20 dark:to-transparent rounded-3xl -z-10 blur-2xl"></div>

                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary dark:text-blue-200 text-sm font-bold mb-6 tracking-wide uppercase border border-blue-200 dark:border-blue-800">
                    Ihr Partner in Baden-Württemberg
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-black text-gray-900 dark:text-white leading-tight mb-6 drop-shadow-lg">
                    Finanzielle Freiheit <br class="hidden lg:block"/>durch <span class="text-primary relative inline-block">
                        Kompetenz
                        <svg class="absolute w-full h-3 -bottom-1 left-0 text-secondary opacity-60" fill="none" viewBox="0 0 200 9" xmlns="http://www.w3.org/2000/svg"><path d="M2.00025 6.99997C25.7502 2.49997 106.375 -3.50003 197.5 5.99997" stroke="currentColor" stroke-width="3"></path></svg>
                    </span>
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed drop-shadow">
                    Wir begleiten Sie sicher durch den Finanz-Dschungel. Mit maßgeschneiderten Versicherungskonzepten und soliden Anlagestrategien sorgen wir für Ihre sorgenfreie Zukunft.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded font-bold text-lg shadow-lg hover:bg-blue-800 transition transform hover:-translate-y-1" href="{{ route('kontakt') }}">
                        Beratungstermin vereinbaren
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-center gap-2 bg-white dark:bg-surface-dark text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-4 rounded font-bold text-lg hover:shadow-md transition" href="#services">
                        Mehr erfahren
                    </a>
                </div>
                <div class="mt-10 flex items-center justify-center lg:justify-start gap-6 text-gray-500 dark:text-gray-400 text-sm font-medium">
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-secondary text-xl">verified</span>
                        <span>Unabhängig</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-secondary text-xl">verified</span>
                        <span>Persönlich</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-secondary text-xl">verified</span>
                        <span>Transparent</span>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-secondary to-primary rounded-full opacity-20 blur-3xl dark:opacity-40"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-gray-800 max-w-md w-full">
                    <img alt="Ihr Berater - RB Consulting" class="w-full h-auto object-cover transform hover:scale-105 transition duration-700 ease-in-out" src="/photos/personal1.png"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-primary/90 to-transparent p-6 text-white">
                        <p class="font-display font-bold text-xl">R. Berreth</p>
                        <p class="text-sm text-blue-100">Ihr persönlicher Berater</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark border-t border-gray-100 dark:border-gray-800" id="offers">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Warum RB Consulting?</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">Was wir Ihnen bieten</h2>
            <p class="text-gray-600 dark:text-gray-400">
                Unsere Beratung basiert auf Vertrauen, Erfahrung und einer tiefen Verpflichtung gegenüber Ihren Zielen.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">analytics</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Individuelle Analyse</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Keine Lösungen von der Stange. Wir analysieren Ihre aktuelle Situation detailliert, um Potenziale zu erkennen und Risiken zu minimieren.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">verified_user</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Unabhängige Auswahl</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Als unabhängige Berater sind wir nur Ihnen verpflichtet. Wir vergleichen Angebote am Markt, um das Beste für Sie zu finden.
                </p>
            </div>
            <div class="group bg-gray-50 dark:bg-background-dark p-8 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-secondary dark:hover:border-secondary transition-all duration-300 hover:shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 dark:bg-blue-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-lg shadow-sm flex items-center justify-center mb-6 relative z-10">
                    <span class="material-icons text-3xl text-primary">handshake</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Langfristige Partnerschaft</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Finanzen sind Vertrauenssache. Wir begleiten Sie in allen Lebensphasen und passen Ihre Strategie dynamisch an Veränderungen an.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-background-light dark:bg-background-dark" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div class="max-w-2xl">
                <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">Unser Portfolio</span>
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white">Unsere Dienstleistungen im Detail</h2>
            </div>
            <a class="hidden md:inline-flex items-center text-primary font-semibold hover:text-secondary transition mt-4 md:mt-0" href="{{ route('kontakt') }}">
                Alle Leistungen ansehen <span class="material-icons ml-1 text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-white dark:bg-surface-dark rounded-lg p-6 shadow-sm hover:shadow-lg transition-all duration-300 border-t-4 border-primary relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-primary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="text-secondary mb-4 relative z-10">
                    <span class="material-icons text-4xl">health_and_safety</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 relative z-10">Versicherungen</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 relative z-10">
                    Privat- und Gewerbeversicherungen, die exakt auf Ihren Bedarf zugeschnitten sind.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2 relative z-10">
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>PKV &amp; GKV</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Berufsunfähigkeit</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Haftpflicht</li>
                </ul>
            </div>
            <div class="group bg-white dark:bg-surface-dark rounded-lg p-6 shadow-sm hover:shadow-lg transition-all duration-300 border-t-4 border-secondary relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="text-secondary mb-4 relative z-10">
                    <span class="material-icons text-4xl">savings</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 relative z-10">Altersvorsorge</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 relative z-10">
                    Sichern Sie Ihren Lebensstandard im Alter durch intelligente Vorsorgekonzepte.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2 relative z-10">
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Rentenversicherung</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Betriebliche Vorsorge</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Rürup &amp; Riester</li>
                </ul>
            </div>
            <div class="group bg-white dark:bg-surface-dark rounded-lg p-6 shadow-sm hover:shadow-lg transition-all duration-300 border-t-4 border-primary relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-primary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="text-secondary mb-4 relative z-10">
                    <span class="material-icons text-4xl">trending_up</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 relative z-10">Investment</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 relative z-10">
                    Vermögensaufbau mit Strategie. Wir finden die passenden Anlagen für Ihr Risikoprofil.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2 relative z-10">
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Fonds &amp; ETFs</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Einmalanlagen</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Sparpläne</li>
                </ul>
            </div>
            <div class="group bg-white dark:bg-surface-dark rounded-lg p-6 shadow-sm hover:shadow-lg transition-all duration-300 border-t-4 border-secondary relative overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-20 h-20 bg-secondary/10 rounded-full -mr-8 -mt-8 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="text-secondary mb-4 relative z-10">
                    <span class="material-icons text-4xl">real_estate_agent</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 relative z-10">Baufinanzierung</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 relative z-10">
                    Der Weg ins Eigenheim. Wir vergleichen Konditionen von hunderten Banken für Sie.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2 relative z-10">
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Neubau &amp; Kauf</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Umschuldung</li>
                    <li class="flex items-center"><span class="material-icons text-secondary text-xs mr-2">check_circle</span>Modernisierung</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-white mb-4">Was unsere Kunden sagen</h2>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/10 text-white">
                <div class="flex text-secondary mb-4">
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                </div>
                <p class="italic mb-6 opacity-90">"Hervorragende Beratung! Herr Burkhardt hat sich viel Zeit genommen, um meine Versicherungssituation zu analysieren. Ich fühle mich endlich gut abgesichert und zahle weniger als vorher."</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary font-bold mr-3">M</div>
                    <div>
                        <p class="font-bold">Michael Schmidt</p>
                        <p class="text-xs opacity-70">Unternehmer aus Stuttgart</p>
                    </div>
                </div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/10 text-white">
                <div class="flex text-secondary mb-4">
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                </div>
                <p class="italic mb-6 opacity-90">"Die Altersvorsorge war für mich immer ein Buch mit sieben Siegeln. RB Consulting hat mir die Optionen verständlich erklärt und eine Strategie entwickelt, die zu mir passt."</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary font-bold mr-3">S</div>
                    <div>
                        <p class="font-bold">Sabine Weber</p>
                        <p class="text-xs opacity-70">Architektin</p>
                    </div>
                </div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/10 text-white hidden lg:block">
                <div class="flex text-secondary mb-4">
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star</span>
                    <span class="material-icons text-sm">star_half</span>
                </div>
                <p class="italic mb-6 opacity-90">"Sehr kompetent und unaufdringlich. Ich schätze besonders die jährlichen Check-ups, bei denen geprüft wird, ob meine Verträge noch aktuell sind."</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary font-bold mr-3">T</div>
                    <div>
                        <p class="font-bold">Thomas Klein</p>
                        <p class="text-xs opacity-70">IT-Berater</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-surface-dark">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-secondary/10 via-primary/5 to-secondary/10 dark:from-secondary/20 dark:via-primary/10 dark:to-secondary/20 rounded-2xl p-8 md:p-12 shadow-lg border-l-4 border-secondary dark:border-secondary flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
            <!-- Decorative accent -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-secondary/5 rounded-full -mr-20 -mt-20 blur-2xl dark:bg-secondary/10"></div>

            <div class="text-center md:text-left relative z-10">
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-2">Bereit für Ihre finanzielle Sicherheit?</h2>
                <p class="text-gray-600 dark:text-gray-400">Vereinbaren Sie jetzt ein unverbindliches Erstgespräch.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 relative z-10">
                <a href="{{ route('kontakt') }}" class="bg-primary hover:bg-blue-800 text-white px-8 py-3 rounded shadow-lg transition font-semibold whitespace-nowrap transform hover:scale-105 hover:-translate-y-1">
                    Termin anfragen
                </a>
                <a href="tel:+49711123456" class="bg-secondary/20 hover:bg-secondary/30 dark:bg-secondary/30 dark:hover:bg-secondary/40 border border-secondary text-gray-900 dark:text-white px-8 py-3 rounded transition font-semibold whitespace-nowrap flex items-center justify-center gap-2 hover:shadow-md">
                    <span class="material-icons text-sm">phone</span> 0711 123 456
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
