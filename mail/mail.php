<?php 
    $subject = $_POST["subject"];
    $mail = $_POST["mail"];
    $content = $_POST["content"];

    $to = "a19860101@hotmail.com";

    if(mail($to,$subject,$content,$mail)){
        echo "訊息已寄出";
    }else{
        echo "發送失敗";
    }