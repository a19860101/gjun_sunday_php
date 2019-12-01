<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="signup.php">申請會員</a>
    </div>
    <div>
        <form action="" method="post">
            <label for="user">帳號</label>
            <input type="text" name="user" id="user">
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
             <input type="submit" value="登入">
        </form>
    </div>
    <div>
        <form action="" method="post">
            <input type="submit" value="登出">
        </form>
    </div>
    <div>
        <?php
        if(isset($_GET["signup"])){
            if($_GET["signup"]=="success"){
                echo "申請成功，請重新登入";
            }
        }
        ?>
    </div>
</body>
</html>