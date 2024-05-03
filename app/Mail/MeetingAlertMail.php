<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MeetingAlertMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct( $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Meeting Alert',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.meeting-alert',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
