<?php
    if($_POST['submit'] =='submit'){
        $email      =   isset($_POST['email']) ? $_POST['email'] :'';
        $mobile     =   isset($_POST['mobile']) ? $_POST['mobile'] :'';
        $Charter    =   isset($_POST['service']) ? $_POST['service'] :'';
        $fullname   =   isset($_POST['name']) ? $_POST['name'] :'';
        
        $to         =   "mathew@aircharterservices.com";
        $subject    =   'Enquiry from '.ucwords($fullname).','.$mobile.', for '.$Charter.'';
        $txt        =   "Name : ".ucwords($fullname)."\r\n Email: ".$email."\r\n Mobile: ".$mobile."\r\nEnquiry: ".$Charter;
        $headers    =   "MIME-Version: 1.0" . "\r\n";
        $headers   .=   "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers   .=   'From: <contact@aircharterservices.com>' . "\r\n";
        $headers   .=   'Bcc: ds99@gmx.us' . "\r\n";
        //$headers .= 'Cc: mathew@aircharterservices.com' . "\r\n";
        
        $isResponse = mail($to,$subject,$txt,$headers);
        header('Location:thankyou.html');
    }else{
        header('Location:booknow.html');
    }
?>
