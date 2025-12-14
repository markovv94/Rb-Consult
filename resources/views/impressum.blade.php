@extends('layouts.app')

@section('title', 'Impressum - RB Consulting')

@section('content')
<section class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 dark:bg-gradient-to-r dark:from-gray-950 dark:via-gray-900 dark:to-gray-950 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <nav class="flex items-center space-x-2 text-sm text-gray-400">
                <a href="{{ route('home') }}" class="hover:text-gray-200 transition">Startseite</a>
                <span class="text-gray-600">></span>
                <span class="text-gray-200">Impressum</span>
            </nav>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-white leading-tight">Impressum</h1>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-400 space-y-8">

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Anbieter und Verantwortliche(r)</h2>
                <p>
                    <strong>RB Consulting</strong><br/>
                    Musterstraße 123<br/>
                    70173 Stuttgart<br/>
                    Deutschland
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Vertreter</h2>
                <p>
                    Geschäftsführer: [Ihr Name]<br/>
                    Kontakt: info@rb-consulting.de<br/>
                    Telefon: +49 711 123 456
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Registrierung und Berufsangaben</h2>
                <p>
                    <strong>Registrierung und Berufsangaben gemäß §5 und §5a TMG:</strong><br/>
                </p>
                <ul class="list-disc list-inside space-y-2 mt-3">
                    <li>Gewerbeanmeldung: [Eintragung bei der Gewerbebehörde]</li>
                    <li>Steuer-ID: [Ihre Steuernummer]</li>
                    <li>Registrierungsnummer: [Falls bei Regulierungsbehörde registriert]</li>
                    <li>Berufsbezeichnung: Finanzberater / Finanzanlagenvermittler</li>
                    <li>Zuständige Aufsichtsbehörde: [Name der zuständigen Behörde]</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Haftungsausschluss</h2>
                <p>
                    Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen.
                </p>
                <p class="mt-4">
                    Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 des TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                </p>
                <p class="mt-4">
                    Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Haftung für Links</h2>
                <p>
                    Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
                </p>
                <p class="mt-4">
                    Wir haben die verlinkten Seiten im Zeitpunkt der Linksetzung überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Linksetzung nicht erkennbar. Sollten wir auf rechtswidrige Inhalte aufmerksam gemacht werden, werden wir diese Links umgehend entfernen.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Urheberrecht</h2>
                <p>
                    Die durch die Seitenbetreiber erstellten Inhalte und Werke unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des Autors oder Erstellers.
                </p>
                <p class="mt-4">
                    Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Datenschutz</h2>
                <p>
                    Die Nutzung unserer Website ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder Email-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.
                </p>
                <p class="mt-4">
                    Wir weisen darauf hin, dass die Datenübertragung im Internet Sicherheitslücken aufweisen kann. Ein lückenlloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.
                </p>
                <p class="mt-4">
                    Für weitere Informationen zum Datenschutz verweisen wir auf unsere <a href="{{ route('datenschutz') }}" class="text-primary hover:text-blue-800 dark:hover:text-blue-300">Datenschutzerklärung</a>.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">Widerspruch gegen Werbemails</h2>
                <p>
                    Der Versand von Werbe- und Informationsmaterialien per Email ohne vorherige explizite Zustimmung ist untersagt. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, beispielsweise durch Spam-Mails, vor.
                </p>
            </div>

            <div class="bg-blue-50 dark:bg-blue-900/20 p-6 rounded-xl border border-blue-200 dark:border-blue-800">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Wichtiger Hinweis</h3>
                <p class="text-sm">
                    Bitte beachten Sie: Dieses Impressum enthält Platzhalter und Beispielangaben. Ersetzen Sie diese mit Ihren tatsächlichen Unternehmensangaben, Berufsbezeichnungen und Registrierungsinformationen. Bei Nichterfüllung von Impressumspflichten können Bußgelder verhängt werden.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection
