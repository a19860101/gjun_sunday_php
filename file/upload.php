<?php
    $file = $_FILES["img"];
    $filename = $_FILES["img"]["name"];
    $filetype = $_FILES["img"]["type"];
    $error = $_FILES["img"]["error"];
    $filesize = $_FILES["img"]["size"];
    $tmpname = $_FILES["img"]["tmp_name"];

    // echo $file;
    var_dump($file);
    echo $filename;
    echo "<br>";
    echo $filetype;
    echo "<br>";
    echo $error;
    echo "<br>";
    echo $filesize / 1024;
    echo "<br>";
    echo $tmpname;
    echo "<br>";