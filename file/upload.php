<?php
    $file = $_FILES["img"];
    // $filename = $_FILES["img"]["name"];
    // $filename = md5(uniqid()).".png";
    $filetype = $_FILES["img"]["type"];
    $error = $_FILES["img"]["error"];
    $filesize = $_FILES["img"]["size"];
    $tmpname = $_FILES["img"]["tmp_name"];

    switch($filetype){
        case "image/jpeg":
            $filename = md5(uniqid()).".jpg";
            break;
        case "image/png":
            $filename = md5(uniqid()).".png";
            break;
        case "image/gif":
            $filename = md5(uniqid()).".gif";
            break;
    }

    // echo $file;
    // var_dump($file);
    // echo $filename;
    // echo "<br>";
    // echo $filetype;
    // image/jpeg,image/png,image/gif
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // echo $filesize / 1024;
    // echo "<br>";
    // echo $tmpname;
    // echo "<br>";

    if($error == 0 ){
        if(move_uploaded_file($tmpname,"images/{$filename}")){
            // echo "上傳成功";
            header("location:index.php?upload=success");
        }
    }