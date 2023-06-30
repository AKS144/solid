<?php

namespace App\Solid\liskov;

use App\Solid\EmailServiceInterface;

class ABCEmailService implements EmailServiceInterface
{
    public function sendEmail(string $to, string $subject, string $message): void
    {
        //some logic
    }
}


?>