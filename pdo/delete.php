<?php
    include("db.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM students WHERE id = ".$id;
    
    // $sql = "DELETE FROM students WHERE id = ".$_GET["id"];
    
    mysqli_query($conn,$sql);
    header("location:index.php");
