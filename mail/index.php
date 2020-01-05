<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="mailer.php" method="post">
        <input type="text" name="subject" placeholder="主旨">
        <br>
        <input type="text" name="mail" placeholder="信箱">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="內容"></textarea>
        <br>
        <input type="submit" value="寄信">
    </form>
</body>
</html>