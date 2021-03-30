<?php

namespace MDP\Services;

use App\Mail\ContactFormEmail;
use MDP\Apis\MailApi;
use MDP\RequestsData\ContactFormData;

class MailService implements MailApi
{
    /**
     * {@inheritDoc}
     */
    public function sendContactFormEmail(ContactFormData $data): void
    {
        \Mail::to('marcosdipaolo@gmail.com')->send(new ContactFormEmail($data));
    }
}

