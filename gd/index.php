<?php
    //建立畫布
    $width = 600;
    $height = 400;
    $canvas = imagecreatetruecolor($width,$height);

    //建立色彩
    $red = imagecolorallocate($canvas,255,0,0);
    $green = imagecolorallocate($canvas,0,255,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $white = imagecolorallocate($canvas,255,255,255);

    //填色
    imagefill($canvas,0,0,$red);

    //線條
    imageline($canvas,0,0,600,400,$blue);
    imageline($canvas,600,0,0,400,$blue);

    //文字
    imagestring($canvas,5,550,380,"HELLO",$white);

    header("Content-type: image/jpeg");
    imagejpeg($canvas);