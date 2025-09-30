<?php include('header.php'); ?>

<div class="container my-5">
  <h2>報名結果</h2>

  <?php
  $name = $_POST['name'] ?? '未填寫';
  $status = $_POST['status'] ?? '';
  $needLunch = isset($_POST['lunch']);

  $statusText = ($status === 'student') ? '學生' : '教職員';

  echo "<p>" . htmlspecialchars($name) . "（{$statusText}），" .
       ($needLunch ? "需要午餐" : "不需要午餐") . "。</p>";
  ?>
</div>

<?php include('footer.php'); ?>
