<?php
    include("../function.php");
    $img = "../images/".$_GET["img"];
    deletePost($_GET["id"],$img);
    header("location: index.php");