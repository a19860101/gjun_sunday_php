<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>運算子</h1>
    <?php
        $x = 50;
        $y = 100;

        # 算術運算子
        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";

        #比較運算子

        // var_dump($x > $y);
        // var_dump($x < $y);
        // var_dump($x >= $y);
        // var_dump($x <= $y);
        // var_dump($x == $y);//值相等即可
        // var_dump($x === $y);//值與資料型態皆須相同
        // var_dump($x != $y);//值不相等即可
        // var_dump($x !== $y);//資料型態不相等

        #邏輯運算子 
        # !,&&,||,and,or,xor

        // var_dump($x > 0 xor $y > 0);
        // 判斷左右不可同時成立

        // var_dump($x > 0 && $y < 0);

        // var_dump(!isset($x));
        // isset() 判斷括號內存在
        // !isset() 判斷括號內不存在

        #字串運算子
        // echo "<br>";
        // var_dump("asdf".$x."1234");

        # 指定運算子

        // var_dump( $x = $y);
        // var_dump( $x += $y);
        // var_dump( $x -= $y);
        // var_dump( $x *= $y);
        // var_dump( $x /= $y);
        // var_dump( $x %= $y);

        // $a = "HELLO";
        // $a .= " WORLD";
        // $a .= "123456";

        $a = "HELLO"." WORLD"."123456";

        echo $a;

        # 三元運算子

        // ? :
        


    ?>
</body>
</html>