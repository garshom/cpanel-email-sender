<?php

session_start();
error_reporting(ALL);



if(isset($_POST["submitbutton"])){

    if(isset($_REQUEST['htmlmessage'])){
        
        $to = trim($_SESSION["reciever_email_address"]);
        $replyto = trim($_SESSION['replyto_email']);
        $replyto_subject = $_SESSION['replyto_subject'];
        $subject = $_SESSION['email_subject'];
        $senders_email = trim($_SESSION['senders_email']);
        $htmlmessage = trim($_REQUEST["htmlmessage"]);
        
        $head = "MIME-Version: 1.0" . "\r\n";
        $head .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $head .= "From: ".$replyto_subject."<".$senders_email.">" ."\r\n".
        'Reply-To: '.$replyto_subject. "<". $replyto. ">"."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        if(mail($to,$subject,$htmlmessage,$head)){
            header("Location:../../manage/single?email=");
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