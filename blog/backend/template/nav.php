<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Blog 後臺管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">文章列表</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="memberList.php">會員列表</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">前台</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link disabled"><?php echo $_SESSION["NAME"];?>你好</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php?logout=true">登出</a>
      </li>
    </ul>
  </div>
</nav>