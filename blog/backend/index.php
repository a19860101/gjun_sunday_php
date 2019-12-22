<?php
    include("../function.php");
    $rows = showAllPosts();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
        <h1>文章列表</h1>
        </div>
        <?php foreach($rows as $row){ ?>
        <div class="col-8">
            <h2><?php echo $row["title"];?></h2>
        </div>
        <?php }?>

    </div>
</div>
<?php include("template/footer.php"); ?>