<?php
    include("function.php");
    
    if(isset($_POST["login"])){
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        if($user == "" || $pw == ""){
            header("location:loginForm.php");
        }else{
            auth($user,$pw);
        }
    }
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <h2>登入</h2>
        </div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" id="user" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">密碼</label>
                    <input type="pw" id="pw" name="pw" class="form-control">
                </div>
                <input type="submit" value="登入" class="btn btn-primary" name="login">
                <input type="button" value="取消" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>