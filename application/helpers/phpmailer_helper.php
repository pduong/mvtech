<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('send_emailMailer')) {

    /**
     * @param string $recipient email recieve
     * @param string $sender email send
     * @param string $name name of sender
     * @param string $subject 
     * @param string $message
     */
    function send_emailMailer($recipient, $sender, $name, $subject, $message) {
        //require_once("PHPMailer/class.phpmailer.php");
        include "PHPMailer/class.phpmailer.php";
        include "PHPMailer/class.smtp.php";
        
        $CI = & get_instance();

        $mail = new PHPMailer();
        $mail->IsSMTP(); // telling the class to use SMTP
        
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->Host = $CI->config->item('smtp_host'); // sets the SMTP server
        $mail->Port = 25;                    // set the SMTP port for the GMAIL server
        $mail->Username = $CI->config->item('smtp_username'); // SMTP account username
        $mail->Password = $CI->config->item('smtp_password'); // SMTP account password

        $mail->SetFrom($sender, $name);

        $mail->AddReplyTo($sender, $name);

        $mail->Subject = $subject;

        $mail->AltBody = "Reset email"; // optional, comment out and test

        $mail->MsgHTML($message);

        $mail->AddAddress($recipient, '');        

        if (!$mail->Send()) {
            return array("error" => "Mailer Error: " . $mail->ErrorInfo);
        } else {
            return true;
        }
    }

}