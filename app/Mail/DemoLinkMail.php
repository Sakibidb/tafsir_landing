<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoLinkMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this->to($this->lead['email'])
                    ->subject('Your Demo Access Link')
                    ->view('emails.demo_link')
                    ->with([
                        'name' => $this->lead['name'],
                        'demoLink' => 'https://rkmri.co/E0Re0o5REM3M/',
                    ]);
    }
}
