<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user()->loadCount(['companies', 'contacts']);
        $contacts = Contact::query()
            ->forUser($request->user())
            ->latest()
            ->take(5)
            ->get();
        return view('dashboard', compact('user', 'contacts'));
    }
}
