@extends('layouts.app')

@section('title', 'Nettopolice Service')

@section('content')
<section class="relative bg-surface-light dark:bg-gray-800 py-16 lg:py-24 overflow-hidden" style="background-image: url('/photos/hero-bg-custom.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center relative z-10">
        <div class="space-y-6 relative">
            <!-- Gradient overlay mask behind text -->
            <div class="absolute -inset-8 bg-white/30 dark:bg-gray-900/40 rounded-3xl -z-10 blur-2xl"></div>

            <span class="inline-block px-3 py-1 bg-primary/10 dark:bg-primary/30 text-primary dark:text-secondary rounded-full text-xs font-bold uppercase tracking-widest">Finanzoptimierung für Baden-Württemberg</span>
            <h1 class="text-4xl lg:text-6xl font-display font-bold text-gray-900 dark:text-white leading-tight drop-shadow-lg">
                Schön, dass wir uns <span class="text-primary dark:text-secondary">kennenlernen!</span>
            </h1>
            <p class="text-lg text-white leading-relaxed drop-shadow">
                Die meisten Menschen, die hier vorbeikommen, wollen an ihrer Situation etwas ändern - ins Positive! Sie auch? Prima, dann sind Sie genau richtig bei uns. <strong>Wir rechnen nach. Für Sie!</strong> Entdecken Sie die Vorteile einer provisionsfreien Nettopolice.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="tel:+49711123456" class="flex items-center justify-center space-x-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-600 hover:border-primary hover:text-primary px-6 py-3 rounded shadow-sm transition-all duration-300">
                    <span class="material-icons text-secondary text-lg">call</span>
                    <span class="font-semibold">+49 69 348 760 955</span>
                </a>
                <a href="{{ route('kontakt') }}" class="bg-primary text-white hover:bg-blue-900 px-6 py-3 rounded font-semibold shadow-lg transition-colors duration-300">
                    Jetzt Beratung anfordern
                </a>
            </div>
        </div>
        <div class="relative hidden lg:block max-w-md h-96">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary to-secondary opacity-10 rounded-2xl transform rotate-3"></div>
            <img alt="Professional consultant reviewing documents" class="relative rounded-2xl shadow-2xl object-cover h-full w-full border-4 border-white dark:border-gray-700" src="/photos/net.jpeg"/>
        </div>
    </div>
</section>

<section class="bg-gray-900 dark:bg-black text-white py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gray-800 dark:bg-gray-900 p-8 rounded border-t-4 border-secondary hover:transform hover:-translate-y-2 transition-all duration-300 hover:shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-primary/20 rounded-full flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform group-hover:bg-secondary/30">
                    <span class="material-icons text-secondary text-3xl">school</span>
                </div>
                <h3 class="text-xl font-bold mb-3 font-display relative z-10">Live-Online-Kurse</h3>
                <p class="text-gray-400 text-sm leading-relaxed relative z-10">
                    Für Makler und Steuerberater bieten wir vierteljährlich Infoveranstaltungen an. Einfach eine kurze Email an uns und sich für den nächsten Kurs registrieren.
                </p>
            </div>
            <div class="group bg-gray-800 dark:bg-gray-900 p-8 rounded border-t-4 border-primary hover:transform hover:-translate-y-2 transition-all duration-300 hover:shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-primary/20 rounded-full flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform group-hover:bg-secondary/30">
                    <span class="material-icons text-secondary text-3xl">video_camera_front</span>
                </div>
                <h3 class="text-xl font-bold mb-3 font-display relative z-10">Zoom Meeting</h3>
                <p class="text-gray-400 text-sm leading-relaxed relative z-10">
                    Gerne können Sie hier direkt ein Zoom-Meeting bei uns buchen. Wir nehmen uns Zeit für Sie und beantworten alle Ihre Fragen zur Nettopolice.
                </p>
            </div>
            <div class="group bg-gray-800 dark:bg-gray-900 p-8 rounded border-t-4 border-secondary hover:transform hover:-translate-y-2 transition-all duration-300 hover:shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/10 rounded-full -mr-6 -mt-6 group-hover:scale-150 transition-transform duration-300"></div>
                <div class="w-14 h-14 bg-primary/20 rounded-full flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform group-hover:bg-secondary/30">
                    <span class="material-icons text-secondary text-3xl">help_outline</span>
                </div>
                <h3 class="text-xl font-bold mb-3 font-display relative z-10">Noch Fragen offen?</h3>
                <p class="text-gray-400 text-sm leading-relaxed relative z-10">
                    Viele haben berechtigterweise offene Fragen. Wir haben die häufigsten Fragen zusammengestellt und Ihnen beantwortet.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-background-dark">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white mb-6">
                Holen Sie das Beste aus Ihrer Altersvorsorge heraus, indem Sie Ihre Ausgangssituation stark verbessern.
            </h2>
            <p class="text-gray-600 dark:text-gray-300 mb-8">
                Die Altersvorsorge ist eine Aufgabe, bei der nicht der Weg das Ziel ist, jedoch das Ziel permanent verfolgt werden muss. Störquellen müssen ausfindig gemacht und eliminiert werden.
            </p>
            <a class="inline-block border-2 border-primary text-primary dark:text-secondary dark:border-secondary px-8 py-3 rounded font-bold hover:bg-primary hover:text-white dark:hover:bg-secondary dark:hover:text-primary-dark transition-colors uppercase tracking-wider text-sm" href="{{ route('rueckabwicklung') }}">
                Lebensversicherungen
            </a>
        </div>
    </div>
</section>

<section class="bg-primary dark:bg-blue-900 py-20 text-white">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl font-display font-bold mb-6">Warum uns wählen</h2>
            <p class="mb-6 text-blue-100 dark:text-gray-200 text-sm leading-relaxed">
                Wir sind seit 25 Jahren am deutschen Markt tätig. Wir haben mehr als 5.000 Kunden beraten und kennen uns bestens aus. Früher konnten wir zwischen mehr als 100 deutschen Versicherern wählen, heute ist nur noch ein Bruchteil davon übrig. Anstatt zu resignieren, haben wir uns entschieden zu handeln.
            </p>
            <ul class="space-y-2 mb-8 text-blue-100 dark:text-gray-200 font-medium">
                <li class="flex items-center"><span class="material-icons text-white mr-2 text-sm">check</span> Sichern Sie Ihr vorhandenes Sparkapital - LV oder RV</li>
                <li class="flex items-center"><span class="material-icons text-white mr-2 text-sm">check</span> Erhöhen Sie Ihre Ablaufleistung durch Kostenreduzierung</li>
                <li class="flex items-center"><span class="material-icons text-white mr-2 text-sm">check</span> Schärfen Sie Ihren Blick für das Wesentliche</li>
                <li class="flex items-center"><span class="material-icons text-white mr-2 text-sm">check</span> Vertrauen Sie den Besten am Markt</li>
            </ul>
            <a class="inline-block bg-gray-900 text-white border border-transparent px-8 py-3 rounded font-bold hover:bg-transparent hover:border-white hover:text-white transition-all text-sm uppercase" href="{{ route('kontakt') }}">
                Lebensversicherungen
            </a>
        </div>
        <div class="hidden md:flex justify-center items-center">
            <div class="flex flex-col items-center gap-4">
                <span class="material-icons text-white text-9xl">account_balance</span>
                <span class="font-display font-bold text-4xl text-white">RB Consulting</span>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-surface-light dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-display font-bold text-center mb-4 text-gray-900 dark:text-white">Was wir Ihnen bieten</h2>
        <p class="text-center text-gray-500 dark:text-gray-400 mb-12 text-sm">Wir bieten Ihnen folgende Dienstleistungen an</p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-700 rounded shadow-md overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gray-900/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                        <span class="material-icons text-secondary text-4xl">search</span>
                    </div>
                    <img alt="Documents" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="/photos/doc.jpeg"/>
                </div>
                <div class="p-6 border-l-4 border-primary">
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-1">Renditecheck Lebensversicherung</h3>
                    <p class="text-gray-500 dark:text-gray-300 text-xs">Hier gehts direkt zum Check</p>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-700 rounded shadow-md overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gray-900/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                        <span class="material-icons text-secondary text-4xl">search</span>
                    </div>
                    <img alt="Charts" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="/photos/charts.jpeg"/>
                </div>
                <div class="p-6 border-l-4 border-secondary">
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-1">Renditecheck Rentenversicherung</h3>
                    <p class="text-gray-500 dark:text-gray-300 text-xs">Hier gehts direkt zum Check</p>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-700 rounded shadow-md overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gray-900/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                        <span class="material-icons text-secondary text-4xl">search</span>
                    </div>
                    <img alt="Office Work" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="/photos/off.jpeg"/>
                </div>
                <div class="p-6 border-l-4 border-primary">
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-1">Betriebliche Altersvorsorge</h3>
                    <p class="text-gray-500 dark:text-gray-300 text-xs">Hier gehts direkt zum Check</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-green-600 dark:bg-green-800 py-16 text-white text-center relative">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-display font-bold mb-10">Was unsere Kunden sagen</h2>
        <div class="text-6xl text-green-300 font-serif leading-none mb-4">"</div>
        <p class="text-lg md:text-xl font-light italic mb-8 leading-relaxed">
            Am Anfang war ich echt kritisch und habe denen meine Unterlagen gegeben. Nach wenigen Tagen waren die Berechnungen zurück und ich war geschockt! 4.900 Euro haben wir meinen Einzahlungen gefehlt. Ich war genervt. Habe in den sauren Apfel gebissen und kündigen lassen. Zum Glück haben sie nochmal 3.000 Euro zusätzlich zum Rückkaufswert rausgeholt. Ich bin jetzt clever investiert und kann es jedem nur empfehlen.
        </p>
        <div class="font-bold text-lg">Tina Hofferberth</div>
        <div class="text-green-300 text-sm mt-1">★★★★★</div>
        <div class="flex justify-center mt-8 space-x-12">
            <button class="text-white/60 hover:text-white transition-colors"><span class="material-icons">west</span></button>
            <button class="text-white/60 hover:text-white transition-colors"><span class="material-icons">east</span></button>
        </div>
    </div>
</section>

<section class="py-20 bg-white dark:bg-background-dark">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-display font-bold text-center text-gray-900 dark:text-white mb-16">Unsere Dienstleistungen im Detail</h2>
        <div class="grid md:grid-cols-2 gap-x-16 gap-y-12">
            <div class="group">
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-3 group-hover:text-primary dark:group-hover:text-secondary transition-colors">Lebensversicherungs-Check</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-4">
                    Mittlerweile zum jährlichen Ärgernis geworden - die Mitteilung über die erreichten Gewinne der Lebensversicherung. Egal ob mit oder ohne doppelte Todesfallleistung. Einschuss einer BU oder EU. Wir rechnen nach. Wir zeigen auf, welche Rendite erwirtschaftet wird und welche nicht. Alles Andere ergibt sich dann.
                </p>
                <a class="inline-flex items-center text-primary dark:text-secondary font-bold hover:translate-x-2 transition-transform" href="{{ route('rueckabwicklung') }}">
                    <span class="material-icons">arrow_forward</span>
                </a>
                <div class="h-0.5 w-full bg-gray-200 dark:bg-gray-700 mt-6 group-hover:bg-primary dark:group-hover:bg-secondary transition-colors duration-500"></div>
            </div>
            <div class="group">
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-3 group-hover:text-primary dark:group-hover:text-secondary transition-colors">Rentenversicherungs-Check</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-4">
                    Ohne Schnick und Schnack sollte die Rentenversicherung unsere Rente sichern. Doch tut sie das? Schon seit Jahren liefern auch die Rentenversicherungen eine magere Rendite und wir werden mit den Mitteilungen alleine gelassen. Früher wurde die jährlich erwirtschaftete Rendite durch den Versicherer stolz in Prozent ausgewiesen.
                </p>
                <a class="inline-flex items-center text-primary dark:text-secondary font-bold hover:translate-x-2 transition-transform" href="{{ route('rueckabwicklung') }}">
                    <span class="material-icons">arrow_forward</span>
                </a>
                <div class="h-0.5 w-full bg-gray-200 dark:bg-gray-700 mt-6 group-hover:bg-primary dark:group-hover:bg-secondary transition-colors duration-500"></div>
            </div>
        </div>
    </div>
</section>
@endsection
