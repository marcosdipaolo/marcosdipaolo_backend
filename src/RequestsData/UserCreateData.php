<?php

namespace MDP\RequestsData;

interface UserCreateData
{
    public function getName(): string;
    public function getEmail(): string;
    public function getPass(): string;
    public function getApiToken(): string;
}
