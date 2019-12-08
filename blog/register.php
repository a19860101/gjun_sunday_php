<?php
    include("function.php");
    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        $email = $_POST["email"];
        $name = $_POST["name"];
        storeUser($user,$pw,$name,$email);
        header("location:index.php?register=success");
    }
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <h2>申請會員</h2>
        </div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">密碼</label>
                    <input type="password" name="pw" id="pw" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">顯示名稱</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <input type="submit" value="申請" class="btn btn-primary" name="submit">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>