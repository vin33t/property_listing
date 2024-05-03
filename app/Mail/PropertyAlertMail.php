<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PropertyAlertMail extends Mailable
{
    use Queueable, SerializesModels;

    public $property;

    public function __construct( $property)
    {
        $this->property = $property;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Property Alert',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.property-alert',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
