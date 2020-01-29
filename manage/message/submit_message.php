<?php

session_start();
error_reporting("ALL");

if(isset($_POST["submitbutton"])){

    if(isset($_REQUEST['htmlmessage'])){
        $reciever = trim($_SESSION["email_address"]);
        $replyto_email = $_SESSION['replyto_email'];
        $replyto_subject = $_SESSION['replyto_subject'];
        $subject = $_SESSION['subject'];
        $senders_email =  $_SESSION['senders_email'];
        $htmlmessage = trim($_REQUEST["htmlmessage"]);

        $subject = $replyto_subject;
        $head = "MIME-Version: 1.0" . "\r\n";
        $head .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $head .= "From: ".$senders_email . "<". $replyto_subject. ">"."\r\n".
        'Reply-To: '.$replyto_email. "<". $replyto_subject. ">"."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        if(mail($reciever,$subject,$htmlmessage,$head)){
           echo "Successfuly sent";
        }else{
            header("Location:./");
        }
    }else{
        header("Location:./");
    }
    
}else if(isset($_POST["previewbutton"])){
    if (isset($_REQUEST['htmlmessage'])){
        echo trim($_REQUEST["htmlmessage"]);
    }

}else{
    header("Location:./");
}


?>