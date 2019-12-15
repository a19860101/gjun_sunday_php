<?php
    $file = $_FILES["img"];
    $filename = $_FILES["img"]["name"];
    // $filename = md5(uniqid()).".png";
    $filetype = $_FILES["img"]["type"];
    $error = $_FILES["img"]["error"];
    $filesize = $_FILES["img"]["size"];
    $tmpname = $_FILES["img"]["tmp_name"];
    // switch($filetype){
    //     case "image/jpeg":
    //         $filename = md5(uniqid()).".jpg";
    //         break;
    //     case "image/png":
    //         $filename = md5(uniqid()).".png";
    //         break;
    //     case "image/gif":
    //         $filename = md5(uniqid()).".gif";
    //         break;
    // }
    echo $error;
    if($error == 4){
        echo "請選擇檔案";
        return; //終止程式
    }
    $path = pathinfo($filename);
    // var_dump($path);
    // echo $path["dirname"];
    // echo "<br>";
    // echo $path["basename"];
    // echo "<br>";
    // echo $path["extension"];
    // echo "<br>";
    // echo $path["filename"];
    $ext = $path["extension"];
    switch($ext){
        case "jpg":
            $filename = md5(uniqid()).".jpg";
            break;
        case "png":
            $filename = md5(uniqid()).".png";
            break;
        case "gif":
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
    if($ext == "jpg" || $ext== "png" || $ext == "gif"){
        // echo "success";
        if($error == 0 ){
            if(move_uploaded_file($tmpname,"images/{$filename}")){
                echo "上傳成功";
                header("location:index.php?upload=success");
            }
        }else if($error == 1){
            echo "檔案大小超過限制";
        }

    }else {
        echo "請選擇正確的格式";
    }

    // if($ext != "jpg" && $ext != "png"&& $ext != "gif"){
        // echo "請選擇正確的格式";
        // if($error == 0 ){
        //     if(move_uploaded_file($tmpname,"images/{$filename}")){
        //         echo "上傳成功";
        //         header("location:index.php?upload=success");
        //     }
        // }
    // }