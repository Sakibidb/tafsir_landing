<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\ContactFormSubmitted;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.home.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'note'  => 'required|string|max:500',
        ]);

        $data = $request->only(['name', 'email', 'note']);
        Contact::create($data);

        event(new ContactFormSubmitted($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
