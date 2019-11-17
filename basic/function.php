<?php
    function test(){
        // echo "HELLO FUNCTION";
        // $x = 100;
        // $y = 10;
        // return $x + $y;
        return "HELLO";
    }
    // $result = test();
    // echo $result;
    function hello($name){
        $x = "HELLO!!{$name}";
        return $x;
    }

    // echo hello("John");
    // echo hello("Mary");
    // echo hello("Tom");

    function eat($food = "土"){
        return "晚餐吃{$food}";
    }
    
    echo eat("牛肉麵");



?>