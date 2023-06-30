<?php

namespace App\Solid;

interface EmailServiceInterface

{
    public function sendEmail(string $to, string $subject, string $message): void;

}

?>