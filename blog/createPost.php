<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>新增文章</h2>
        </div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">分類</label>
                    <select name="c_id" id="c_id" class="form-control">
                        <option value="1">體育</option>
                        <option value="2">科技</option>
                        <option value="3">生活</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="新增">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>

        </div>
    </div>
</div>

<?php include("template/footer.php"); ?>