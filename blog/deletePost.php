<?php
    include("function.php");
    deletePost($_GET["id"]);
    header("location: index.php");