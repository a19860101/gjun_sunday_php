<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>陣列 Array</h1>
    <?php
        // $x = array();
        // $x[0] = "Apple";
        // $x[1] = "Banana";
        // $x[2] = "Kiwi";
        // $x[3] = 100;

        // $x = array("Apple","Banana","Kiwi",100);

        $fruits = ["Banana","Apple","Kiwi","Melon","Orange","Peach","Grape","Tomato"];
        $foods = ["滷肉飯"=>30,"雞肉飯"=>30,"排骨飯"=>80,"雞腿飯"=>90,"控肉飯"=>80];

        // key => value
        // 鍵 => 值

        // $y = array();

        //echo count($fruits);
        //計算陣列的內容數量

        // for($i=0;$i<count($fruits);$i++){
        //     echo $fruits[$i]."<br>";
        // }

        // foreach($fruits as $fruit){
        //     echo $fruit."<br>";
        // }
       
        #排序
        // sort($fruits);
        // rsort($fruits);
        // shuffle($fruits);

        // ksort($foods);
        // krsort($foods);
        // asort($foods);
        // arsort($foods);
        
        // var_dump($foods);
        // echo $foods["滷肉飯"];

        #20191110

        #in_array()

        // if(in_array("apple",$fruits)){
        //     echo "success";
        // }else{
        //     echo "error";
        // }
        // var_dump(in_array("Apple",$fruits));

        #is_array()
        // $x = 10;
        // var_dump(is_array($fruits));
        // var_dump(is_array($x));
        
        // if(is_array($fruits)){
        //     echo "Array";
        // }else{
        //     echo "Not Array";
        // }

        // array_push($fruits,"TEST");
        //在陣列後方新增一個值

        // array_pop($fruits);
        //移除陣列最後一個值

        // array_shift($fruits);
        //移除陣列第一個值
        
        // array_unshift($fruits,"QQQQ");
        //在陣列最前面新增一個值

        // foreach($fruits as $fruit){

        //     echo $fruit."<br>";
        // }
        // foreach($foods as $food => $price){
        //     echo "<div>{$food}:{$price}元</div>";
        // }

        #compact
        $name = "John";
        $mail = "john@asdf.com";
        $phone = "123456789";
        $gender = "male";

        $people = compact("name","mail","phone","gender");
        // var_dump($people);

        foreach($people as $key => $value){
            echo "{$key} : {$value}";
            echo "<br>";
        }




    ?>
</body>
</html>