<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendContactMail
{
    public function handle(ContactFormSubmitted $event)
    {
        Mail::to('sps@saralrekha.com.bd')->send(new ContactMail($event->contact));
    }
}

