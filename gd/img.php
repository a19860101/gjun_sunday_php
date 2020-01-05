<?php
    $img = "https://picsum.photos/1024";

    $source = imagecreatefromjpeg($img);

    $source_w = imagesx($source);
    $source_h = imagesy($source);

    var_dump($source_w);
    var_dump($source_h);

    $new_w = $source_w / 2;
    $new_h = $source_h / 2;

    $new_img = imagecreatetruecolor($new_w,$new_h);
    imagecopyresampled($new_img,$source,0,0,0,0,$new_w,$new_h,$source_w,$source_h);

    $path = uniqid().".jpg";
    imagejpeg($new_img,"images/{$path}",80);