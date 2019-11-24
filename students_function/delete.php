<?php
    include("db.php");
    include("function.php");
    // $id = $_GET["id"];
    
    // $sql = "DELETE FROM students WHERE id = ".$_GET["id"];
    deleteStudent($_GET["id"]);
    header("location:index.php");
