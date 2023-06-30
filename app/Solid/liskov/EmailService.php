<?php

namespace App\Solid\liskov;

class EmailService
{
    public function sendMessage($emailService)
    {
        $emailService->sendEmail(string $to, string $subject, string $message);
    }
}

$emailService = new EmailService();
$emailService->sendMessage(new ABCEmailService());


?>