<?php

namespace MDP\RequestsData;

interface ContactFormData
{
    public function getName(): string;
    public function getSubject(): string;
    public function getEmail(): string;
    public function getMessage(): string;
}
