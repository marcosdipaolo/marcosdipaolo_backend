<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use MDP\RequestsData\ContactFormData;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    private ContactFormData $data;

    /**
     * Create a new message instance.
     *
     * @param ContactFormData $data
     */
    public function __construct(ContactFormData $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Contact Form Message')
            ->replyTo($this->data->getEmail())
            ->markdown('emails.contact-form', [
                "message" => $this->data->getMessage(),
                "subject" => $this->data->getSubject(),
                "email" => $this->data->getEmail(),
                "name" => $this->data->getName(),
            ]);
    }
}
