<?php

namespace App\Controllers;


class SmController  extends \Controller{
    public function sm(): void //no idea why void is here
    {
            $this->render('sm');
    }
    //potentially parent this bitch
    public function send_mail(){
        If(isset($_POST['sendout'])){ //messy but does the job
            $to=$_POST['to'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $header=$_POST['header'];
            $headers="From: ". $header . "\r\n";
            mail($to,$subject,$message, $headers);
        }
        $this->render('sm');

    }

}