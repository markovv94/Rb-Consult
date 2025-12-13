@extends('layouts.app')

@section('title', 'Datenschutz - RB Consulting')

@section('content')
@component('components.breadcrumb', ['items' => [
    ['name' => 'Startseite', 'url' => route('home')],
    ['name' => 'Datenschutz', 'url' => null]
]])
@endcomponent

<section class="py-12 bg-gray-50 dark:bg-background-dark border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 dark:text-white">Datenschutzerklärung</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Informationen zur Verarbeitung Ihrer Daten gemäß DSGVO</p>
    </div>
</section>

<section class="py-20 bg-white dark:bg-surface-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-400 space-y-8">

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">1. Verantwortlicher</h2>
                <p>
                    <strong>RB Consulting</strong><br/>
                    Musterstraße 123<br/>
                    70173 Stuttgart<br/>
                    E-Mail: <a href="mailto:info@rb-consulting.de" class="text-primary hover:text-blue-800 dark:hover:text-blue-300">info@rb-consulting.de</a><br/>
                    Telefon: <a href="tel:+49711123456" class="text-primary hover:text-blue-800 dark:hover:text-blue-300">+49 711 123 456</a>
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">2. Ihre Betroffenenrechte</h2>
                <p>Gemäß DSGVO haben Sie folgende Rechte:</p>
                <ul class="list-disc list-inside space-y-2 mt-3">
                    <li><strong>Recht auf Auskunft:</strong> Sie können jederzeit eine Auskunft über Ihre bei uns gespeicherten personenbezogenen Daten verlangen</li>
                    <li><strong>Recht auf Berichtigung:</strong> Sie können die Berichtigung unrichtiger Daten verlangen</li>
                    <li><strong>Recht auf Löschung:</strong> Sie können die Löschung Ihrer Daten verlangen, soweit keine gesetzlichen Aufbewahrungspflichten bestehen</li>
                    <li><strong>Recht auf Einschränkung:</strong> Sie können die Einschränkung der Verarbeitung verlangen</li>
                    <li><strong>Recht auf Datenportabilität:</strong> Sie können Ihre Daten in einem strukturierten, gängigen und maschinenlesbaren Format erhalten</li>
                    <li><strong>Recht auf Beschwerde:</strong> Sie haben das Recht, sich bei einer Datenschutzbehörde zu beschweren</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">3. Erhebung und Speicherung von Daten</h2>

                <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-6 mb-3">Beim Besuch unserer Website</h3>
                <p>
                    Beim Aufruf unserer Website werden automatisch folgende Daten erfasst:
                </p>
                <ul class="list-disc list-inside space-y-2 mt-3">
                    <li>IP-Adresse</li>
                    <li>Datum und Uhrzeit des Zugriffs</li>
                    <li>Besuchte Seite und deren Inhalte</li>
                    <li>Browser- und Betriebssystemtyp</li>
                    <li>Referrer-URL (von wo Sie zur Seite gekommen sind)</li>
                </ul>
                <p class="mt-4">
                    Diese Daten werden in den Server-Log-Dateien gespeichert und nach spätestens 30 Tagen gelöscht, sofern keine gesetzlichen Aufbewahrungspflichten bestehen.
                </p>

                <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-6 mb-3">Beim Ausfüllen von Formularen</h3>
                <p>
                    Wenn Sie unsere Kontaktformulare ausfüllen, erheben wir folgende Daten:
                </p>
                <ul class="list-disc list-inside space-y-2 mt-3">
                    <li>Vor- und Nachname</li>
                    <li>Email-Adresse</li>
                    <li>Telefonnummer (optional)</li>
                    <li>Betreff und Nachricht Ihrer Anfrage</li>
                </ul>
                <p class="mt-4">
                    Diese Daten werden ausschließlich zur Bearbeitung Ihrer Anfrage verwendet. Ihre Daten werden nicht ohne Ihre Zustimmung an Dritte weitergegeben.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">4. Rechtsgrundlagen für die Datenverarbeitung</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Art. 6 Abs. 1 a) DSGVO:</strong> Verarbeitung mit Ihrer Einwilligung (z.B. bei Kontaktformularen)</li>
                    <li><strong>Art. 6 Abs. 1 b) DSGVO:</strong> Verarbeitung zur Erfüllung eines Vertrages (z.B. bei Beratungsaufträgen)</li>
                    <li><strong>Art. 6 Abs. 1 c) DSGVO:</strong> Verarbeitung zur Erfüllung einer Rechtsablage (z.B. Aufbewahrung für Steuerzwecke)</li>
                    <li><strong>Art. 6 Abs. 1 f) DSGVO:</strong> Verarbeitung zur Wahrung unserer berechtigten Interessen (z.B. Sicherheit und Betrieb der Website)</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">5. Datenspeicherung und Aufbewahrung</h2>
                <p>
                    Ihre personenbezogenen Daten werden nur solange gespeichert, wie dies für die Erreichung der Ziele erforderlich ist, für die sie erhoben wurden. Danach werden die Daten gelöscht, sofern keine gesetzlichen Aufbewahrungspflichten (z.B. Steuer- oder Handelsrecht) bestehen.
                </p>
                <p class="mt-4">
                    Für Kontaktdaten gilt eine Aufbewahrungsfrist von mindestens 3 Jahren nach der letzten Kontaktaufnahme (gemäß Handelsgesetzbuch).
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">6. Cookies und Tracking</h2>
                <p>
                    Diese Website setzt keine Cookies. Ihre Browserdaten werden nicht verfolgt.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">7. Google Analytics (optional)</h2>
                <p>
                    Diese Website verwendet derzeit <strong>nicht</strong> Google Analytics. Sollten Sie Google Analytics in Zukunft einsetzen, müssen Sie eine entsprechende Datenschutzerklärung mit Opt-out-Option hinzufügen.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">8. Newsletter</h2>
                <p>
                    Wenn Sie sich zu unserem Newsletter anmelden, speichern wir Ihre Email-Adresse und Ihr Anmeldedatum. Sie können sich jederzeit abmelden. Die Anmeldung erfolgt mittels Double-Opt-in-Verfahren, d.h. wir schicken Ihnen eine Bestätigungsmail, in der Sie Ihre Anmeldung bestätigen müssen.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">9. Weitergabe von Daten</h2>
                <p>
                    Ihre personenbezogenen Daten werden an Dritte weitergegeben nur in folgenden Fällen:
                </p>
                <ul class="list-disc list-inside space-y-2 mt-3">
                    <li>Auf Basis Ihrer ausdrücklichen Zustimmung</li>
                    <li>Zur Erfüllung rechtlicher Verpflichtungen</li>
                    <li>Zu Service-Providern, die Ihre Daten nur auf unseren Auftrag hin verarbeiten (z.B. Email-Service-Provider)</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">10. Sicherheit Ihrer Daten</h2>
                <p>
                    Wir setzen geeignete technische und organisatorische Maßnahmen ein, um Ihre Daten vor unbefugtem Zugriff, Verlust oder Zerstörung zu schützen. Unsere Website nutzt eine SSL-Verschlüsselung (HTTPS). Die Übertragung von Daten über das Internet birgt jedoch grundsätzlich Risiken. Ein vollständiger Schutz vor Datenmissbrauch ist technisch nicht möglich.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">11. Datenschutzbeauftragte</h2>
                <p>
                    <strong>Datenschutzbeauftragte:</strong><br/>
                    [Falls vorhanden: Name und Kontaktdaten des Datenschutzbeauftragten]
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">12. Änderungen dieser Datenschutzerklärung</h2>
                <p>
                    Wir behalten uns das Recht vor, diese Datenschutzerklärung jederzeit anzupassen. Die aktuelle Version ist immer auf dieser Seite abrufbar. Wir werden Sie bei wesentlichen Änderungen informieren.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white mb-4">13. Kontakt bei Fragen</h2>
                <p>
                    Wenn Sie Fragen zu dieser Datenschutzerklärung haben oder Ihre Rechte ausüben möchten, kontaktieren Sie uns bitte:
                </p>
                <p class="mt-4">
                    <strong>RB Consulting</strong><br/>
                    Datenschutz<br/>
                    Musterstraße 123<br/>
                    70173 Stuttgart<br/>
                    <a href="mailto:info@rb-consulting.de" class="text-primary hover:text-blue-800 dark:hover:text-blue-300">info@rb-consulting.de</a>
                </p>
            </div>

            <div class="bg-blue-50 dark:bg-blue-900/20 p-6 rounded-xl border border-blue-200 dark:border-blue-800">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Wichtiger Hinweis</h3>
                <p class="text-sm">
                    Diese Datenschutzerklärung enthält Platzhalter und Beispielangaben. Überprüfen Sie diese sorgfältig und passen Sie sie an Ihre tatsächlichen Datenverarbeitungsprozesse an. Die Erfüllung der DSGVO ist gesetzliche Pflicht und kann bei Verstoß zu hohen Bußgeldern führen.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection
