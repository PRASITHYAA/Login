<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class TrainingSubmission extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Training Application - ".$this->data['first_name'].' '.$this->data['last_name'].", Sector - ".$this->data['sector'].", Course Code - ".$this->data['course_code'].", Course Title - ".$this->data['course_title']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->data['view'],
            with: $this->data,

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $dateTime = $this->data['created_at'];
        return [
            Attachment::fromStorageDisk('public', 'training_application_'.$this->data['first_name'].'_'.$dateTime.'.pdf')
                ->as('training_application_'.$this->data['first_name'].'_'.$dateTime.'.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
