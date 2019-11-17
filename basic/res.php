<?php
    // if(isset($_POST["user"])){
    //     $user = $_POST["user"];
    //     $email = $_POST["email"];
    //     echo "<h1>POST</h1>";
        
    // }else{
    //     $user = $_GET["user"];
    //     $email  = $_GET["email"];
    //     echo "<h1>GET</h1>";
    // }
    // echo $user;
    // echo "<br>";
    // echo $email;
    #user
    if(empty($_POST["user"])){
        // echo "請輸入USER名稱";
        // echo "<br>";
        header("location:form.php?error=0");
    }else{
        $user = $_POST["user"];
        echo $user;
        echo "<br>";
    }
    #email
    if($_POST["email"] == ""){
        // echo "請輸入EMAIL";
        // echo "<br>";
        header("location:form.php?error=1");
    }else{
        $email = $_POST["email"];
        echo $email;
        echo "<br>";
    }

    #edu
    if(empty($_POST["edu"])){
        header("location:form.php?error=2");
    }else{
        $edu = $_POST["edu"];
        echo $edu;
        echo "<br>";
    }
    
    
    
    $gender = $_POST["gender"];

    // var_dump($skills);
    // foreach($skills as $skill){
    //     echo $skill;
    //     echo ",";
    // }


    echo $gender;
    echo "<br>";

    if(isset($_POST["skills"])){
        $skills = $_POST["skills"];
        $skill = implode(",",$skills);
        echo $skill;
        echo "<br>";
    }else{
        $skill = "未選擇";
        echo $skill;
    }

    $comment = $_POST["comment"];
    echo $comment;


    