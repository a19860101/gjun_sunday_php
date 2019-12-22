<?php
    include("function.php");
    deletePost($_GET["id"],$_GET["img"]);
    header("location: index.php");