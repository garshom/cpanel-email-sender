<?php

session_start();
error_reporting("ALL");

if(isset($_POST["submitbutton"])){
    if (isset($_REQUEST['email_subject']) &&  isset($_REQUEST['replyto_email']) && isset($_REQUEST['replyto_subject']) && isset($_REQUEST['senders_email'])){
        $_SESSION['email_subject']=$_REQUEST['email_subject'];
        $_SESSION['replyto_email']=$_REQUEST['replyto_email'];
        $_SESSION['replyto_subject']=$_REQUEST['replyto_subject'];
        $_SESSION['senders_email']= $_REQUEST['senders_email'];
        header("Location:../message");
    }else{
        header("Location:./");
    }
}else{

    header("Location:./");
}


?>