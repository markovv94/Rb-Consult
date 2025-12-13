<?php

namespace App\Http\Controllers;

use App\Models\PhoneCallback;
use Illuminate\Http\Request;

class PhoneCallbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        PhoneCallback::create($validated);

        return response()->json(['success' => true, 'message' => 'Rückrufanfrage gesendet!'], 201);
    }
}
