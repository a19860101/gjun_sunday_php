<?php
    include("function.php");
    check_login();
    $rows = showAllCates();
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $c_id = $_POST["c_id"];
        $u_id = $_SESSION["ID"];
        $row = storePost($title,$content,$c_id,$u_id);
        header("location:index.php");
    }
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <h2>新增文章</h2>
        </div>
        <div class="col-md-8 py-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="img">封面圖片</label>
                    <input type="file" name="img" id="img" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">分類</label>
                    <select name="c_id" id="c_id" class="form-control">

                    <?php foreach($rows as $row){ ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["title"];?></option>
                    
                    <?php } ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="新增" name="submit">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>

        </div>
    </div>
</div>

<?php include("template/footer.php"); ?>
<script>
    CKEDITOR.replace('content');
</script>