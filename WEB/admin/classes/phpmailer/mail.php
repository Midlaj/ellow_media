<?php
include('phpmailer.php');
class Mail extends PhpMailer
{
    // Set default variables for all new objects
    public $From     = 'mail@ellowmedia.com';
    public $FromName = SITETITLE;
    public $Host     = 'in-v3.mailjet.com';
    public $Mailer   = 'smtp';
    public $SMTPAuth = true;
    public $Username = '0743a18edb80c572969a39ac3eaf5a20';
    public $Password = '5bbb6b348f337f55546c414d327bd60a';
    public $SMTPSecure = 'tls';
    public $WordWrap = 75;


    public function subject($subject)
    {
        $this->Subject = $subject;
    }

    public function body($body)
    {
        $this->Body = $body;
    }

    public function send()
    {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;", "\n\n", $this->AltBody);
        return parent::send();
    }
}
