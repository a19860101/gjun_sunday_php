<?php
    try{
        include("pdo.php");
        $sql = "SELECT * FROM files";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>
    <?php 
        // echo md5(uniqid());
    ?>
    <div>
        <?php foreach($rows as $row){ ?>
            <img src="images/<?php echo $row["name"];?>" width="200">
        <?php } ?>
    </div>
</body>
</html>