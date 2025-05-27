<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Mail\DemoLinkMail;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    public function create()
    {
        return view('frontend.home.hero');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|unique:leads,email',
            'phone'             => 'required|string|max:20|unique:leads,phone',
            'country_code'      => 'nullable',
            'country_code_name' => 'nullable',
        ]);

        $lead = Lead::create($validated);

        Mail::to($lead->email)->send(new DemoLinkMail($lead));

        return redirect()->back()->with('success', 'Check your email for the demo link.');
    }
}
