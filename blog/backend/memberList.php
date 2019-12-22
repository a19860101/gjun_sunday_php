<?php
    include("../function.php");
    $rows = showAllUsers();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>會員列表</h1>
        </div>
        <div class="col-12">
            <table class='table'>
                <tr>
                    <th>#</th>
                    <th>會員帳號</th>
                    <th>Email</th>
                    <th>申請時間</th>
                    <th>會員等級</th>
                    <th></th>
                </tr>
                <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["user"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["created_at"];?></td>
                    <td><?php #echo $row["level"];?>
                        <?php
                            echo $row["level"] == 0 ? "管理員":"一般會員"; 
                        ?>
                    </td>
                    <td>
                        <?php if($row["level"] == 1){ ?>
                        <a href="switchLevel.php?id=<?php echo $row["id"];?>&level=<?php echo $row["level"];?>" class="btn btn-info" onclick="return confirm('確定修改權限？')">指定為管理員</a>
                        <?php }else{ ?>
                        <a href="switchLevel.php?id=<?php echo $row["id"];?>&level=<?php echo $row["level"];?>" class="btn btn-danger" onclick="return confirm('確定修改權限？')">取消管理員</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>
<?php include("template/footer.php"); ?>