<?php

namespace App\Http\Controllers;

use App\Models\CallbackRequest;
use Illuminate\Http\Request;

class CallbackRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'interest' => 'nullable|string|max:255',
        ]);

        CallbackRequest::create($validated);

        return response()->json(['success' => true, 'message' => 'Rückrufanfrage gesendet!'], 201);
    }
}
