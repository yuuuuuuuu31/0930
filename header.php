<?php
$title=$title??"活動系統";
function nav_active($file) {
    $current = basename($_SERVER['PHP_SELF']);
    return $current === $file ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="custom.css" />
</head>
<body class="bg-light">
    <header class="masthead text-black">
  <nav class="navbar navbar-expand-lg custom-bg">
    <div class="container">
      <a class="navbar-brand" href="首頁.php">活動報名系統</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link<?=nav_active('首頁.php')?>" aria-current="page" href="首頁.php">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?=nav_active('index.php')?>" href="index.php">迎新茶會</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?=nav_active('intro.php')?>" href="intro.php">資管一日營</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>