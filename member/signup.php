<?php
    if(isset($_POST["submit"])){

        try{
            include("pdo.php");
            $user = $_POST["user"];
            $pw = $_POST["pw"];

            $sql = "INSERT INTO members(user,pw)VALUES(?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw]);
            header("location:index.php?signup=success");

        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="user">帳號</label>
        <input type="text" name="user" id="user">
        <label for="pw">密碼</label>
        <input type="password" name="pw" id="pw">
        <input type="submit" value="申請" name="submit">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>