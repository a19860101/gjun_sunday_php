<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">文章列表</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">會員列表</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION["ID"]) && $_SESSION["LEVEL"] == 0){ ?>
      <li class="nav-item">
        <a class="nav-link" href="backend/index.php">管理頁面</a>
      </li>
      <?php }?>
      <?php if(!isset($_SESSION["ID"])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="register.php">申請會員</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginForm.php">登入</a>
      </li>
      <?php }else{ ?>
      <li class="nav-item">
        <a href="#" class="nav-link disabled"><?php echo $_SESSION["NAME"];?>你好</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php?logout=true">登出</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>