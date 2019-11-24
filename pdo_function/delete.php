<?php
    include("function.php");
    deleteStudent($_GET["id"]);
    header("location:index.php");
