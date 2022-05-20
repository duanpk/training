<?php
abstract class Mail
{
    private $sender;
    private $recipients;
    private $subject;
    private $body;

    public function getSender()
    {
        return $this->sender;
    }

    public function getRecipients()
    {
        return $this->recipients;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function __construct(...$args)
    {
        $this->setSender($args[0] ?? 'youremail@yourdomain.com');
        $this->setRecipients($args[1] ?? 'emailID@domain.com');
        $this->setSubject($args[2] ?? 'Just a Test');
        $this->setBody($args[3] ?? 'Hi Name, How are you?');
    }

    public function sendEmail()
    {
        return
            " successfully sent to " . $this->getRecipients() . "\n" .
            "Sender: " . $this->getSender() . "\n" .
            "Subject: " . $this->getSubject() . "\n" .
            "Content: " . $this->getBody() . "\n";
    }
}

class SendGrid extends Mail
{
    public function sendEmail()
    {
        return "SendGrid" . parent::sendEmail();
    }
}

class MailChip extends Mail
{
    public function sendEmail()
    {
        return "MailChip" . parent::sendEmail();
    }
}

$sendGrid = new SendGrid();
echo $sendGrid->sendEmail() . "\n";

$mailChip = new MailChip(
    'duanpk@pascaliaasia.com',
    'phamduan548@gmail.com',
    'Test',
    'Hi, how are you?'
);
echo $mailChip->sendEmail() . "\n";