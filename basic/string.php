<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>STRING</h1>
    
    <?php
        $s = "lorem ipsum dolor sit amet consectetur, adipisicing elit. beatae, laborum";
        $fruits = ["Banana","Apple","Kiwi","Melon","Orange","Peach","Grape","Tomato"];
        echo strtoupper($s); //大寫
        echo "<br>";
        echo strtolower($s); //小寫
        echo "<br>";
        echo ucfirst($s); //首字大寫
        echo "<br>";
        echo ucwords($s); //單字大寫
        echo "<hr>";

        #implode 集中
        $f_string = implode(",",$fruits);
        echo $f_string;
        echo "<br>";

        #explode 爆炸
        $s_array = explode(" ",$s);
        // var_dump($s_array);
        foreach($s_array as $s_a){
            echo $s_a;
            echo "<br>";
        }
        echo "<hr>";
        #substr 擷取子字串;
        
        $c = "曾經是大陸首富、目前排名第14的大陸地產大亨王健林獨子、萬達集團董事王思聰，因名下的上海熊貓互娛文化有限公司負債，傳遭法院宣告成了「老賴」（失信被執行人），經陸媒9日查證「中國執行資訊公開網」，王思聰還未達「老賴」程度，但確被列為「限制消費人員」，依法不能搭乘他爸的私人飛機。";
        $new_s = substr($s,0,15);
        $new_c = mb_substr($c, 0, 30, "utf-8");

        echo $new_s;
        echo "<br>";
        echo $new_c;
        
    ?>
</body>
</html>