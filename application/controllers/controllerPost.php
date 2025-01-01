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

    protected function processRecord()
    {
        $table = new ModelDatabaseTableTest();
        switch ($_POST["action"])
        {
            case "add":
                $table->addRecord($_POST["record"]);
                break;

            case "save":
                $id = $_POST["record"]["id"];
                unset($_POST["record"]["id"]);
                $table->updateRecord($_POST["record"], "id = {$id}");
                break;

            case "delete":
                $id = $_POST["record"]["id"];
                unset($_POST["record"]["id"]);
                $table->deleteRecord("id = {$id}");
                break;

            default:
                echo "Invalid action: '{$_POST["action"]}'";
                F\debug($_POST);
                exit();
                break;
        }
        $this->gotoLocation("database");
    }

    protected function processJsPost()
    {
        return json_encode(F\getPostedData(), JSON_PRETTY_PRINT);
    }
}
