<?php

namespace MDP\Apis;

use MDP\RequestsData\ContactFormData;

interface MailApi
{
    /**
     * @param ContactFormData $data
     */
    public function sendContactFormEmail(ContactFormData $data): void;
}
