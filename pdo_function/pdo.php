<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "sunday";
    $db_charset = "utf8mb4";

    // $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $dsn = "mysql:host".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    // $pdo = new PDO($dsn,$db_user,$db_pw);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        $pdo = new PDO($dsn,$db_user,$db_pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        date_default_timezone_set("Asia/Taipei");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
