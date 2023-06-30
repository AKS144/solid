<?php

namespace App\Solid\liskov;

use App\Solid\EmailServiceInterface;

class XYZEmailService implements EmailServiceInterface
{
    public function sendEmail(string $to, string $subject, string $message): void
    {

    }
}


?>