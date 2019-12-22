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
                        <a href="#" class="btn btn-info">指定為管理員</a>
                        <a href="#" class="btn btn-danger">取消管理員</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>
<?php include("template/footer.php"); ?>