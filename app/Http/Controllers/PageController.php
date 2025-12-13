<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\ContactSubmission;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function anlagen(): View
    {
        return view('anlagen');
    }

    public function ruckabwicklung(): View
    {
        return view('ruckabwicklung');
    }

    public function uberuns(): View
    {
        return view('uberuns');
    }

    public function kontakt(): View
    {
        return view('kontakt');
    }

    public function nettopolcie(): View
    {
        return view('nettopolcie');
    }

    public function kontaktSubmit(): \Illuminate\Http\RedirectResponse
    {
        $validated = request()->validate([
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'privacy' => 'required',
        ]);

        // Save to database
        ContactSubmission::create([
            'first_name' => $validated['first-name'],
            'last_name' => $validated['last-name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'privacy_accepted' => (bool) $validated['privacy'],
            'status' => 'new',
        ]);

        return redirect()->route('kontakt.formular')->with('success', 'Vielen Dank für Ihre Nachricht. Wir melden uns in Kürze bei Ihnen.');
    }

    public function rueckabwicklung_lebensversicherung(): View
    {
        return view('rueckabwicklung.lebensversicherung');
    }

    public function rueckabwicklung_rente(): View
    {
        return view('rueckabwicklung.rente');
    }

    public function anlagen_sechs_neun(): View
    {
        return view('anlagen.sechs-neun-monate');
    }

    public function bav_sanierung(): View
    {
        return view('bav-sanierung');
    }

    public function referenzen(): View
    {
        return view('referenzen');
    }

    public function kontakt_termin(): View
    {
        return view('kontakt.termin');
    }

    public function kontakt_formular(): View
    {
        return view('kontakt.formular');
    }

    public function impressum(): View
    {
        return view('impressum');
    }

    public function datenschutz(): View
    {
        return view('datenschutz');
    }
}
