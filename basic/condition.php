<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 50;
        // if($x > 0){
        //     echo "Success";
        // }

        // if($x > 100){
        //     echo "Good";
        // }else{
        //     echo "Bad";
        // }

        // if($x >= 90){
        //     echo "A";
        // }elseif($x >= 75){
        //     echo "B";
        // }elseif($x >= 60){
        //     echo "C";
        // }else{
        //     echo "FAIL";
        // }

        // $result = $x > 0 ? "Success":"Error";
        // echo $result;
        $y = -50;
        switch($y){
            case 0:
                echo 0;
                break;
            case 1:
                echo 1;
                break;
            case 2:
                echo 2;
                break;
            default:
                echo "error";
        }
        // switch(true){
        //     case $y > 0:
        //         echo "正整數";
        //         break;
        //     case $y < 0:
        //         echo "負整數";
        //         break;
        //     case $y == 0:
        //         echo 0;
        //         break;
        //     default:
        //         echo "Error";
        // }
    ?>
</body>
</html>