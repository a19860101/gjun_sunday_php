<?php
    include("pdo.php");
    class T extends DB {
        function a(){
            echo $this->currentD();
        }
    }
    $x = new T;
    echo $x->currentD();
