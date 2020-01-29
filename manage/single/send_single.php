<?php

session_start();
error_reporting("ALL");

if(isset($_POST["submitbutton"])){
    if (isset($_REQUEST['reciever_email_address'])){
        $_SESSION['reciever_email_address']=$_REQUEST['reciever_email_address'];
        header("Location:../replyto/");
    }else{
        header("Location:./");
    }
}else{

    header("Location:./");
}


?>