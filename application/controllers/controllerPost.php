<?php use framework as F;

class ControllerPost extends F\ControllerBase
{
    protected function sendEmail()
    {
        $host = F\arrayGet($_POST, "host", "");
        $port = F\arrayGet($_POST, "port", 0);
        $user = F\arrayGet($_POST, "user", "");
        $pass = F\arrayGet($_POST, "pass", "");
        $fromName = F\arrayGet($_POST, "from_name", "");
        $fromEmail = F\arrayGet($_POST, "from_email", "");
        $toName = F\arrayGet($_POST, "to_name", "");
        $toEmail = F\arrayGet($_POST, "to_email", "");
        $subject = F\arrayGet($_POST, "subject", "");
        $textMessage = F\arrayGet($_POST, "text_message", "");
        $htmlMessage = F\arrayGet($_POST, "html_message", "");

        $sendMail = new F\ModelSmtpMail($host, $port, $user, $pass);
        $result = $sendMail->sendMessage($fromEmail, $fromName, $toEmail, $toName, $subject, $htmlMessage, $textMessage);

        $this->gotoLocation("email-test");
    }
}
