<?php include('header.php'); ?>

<div class="container my-5">
  <h2>報名結果</h2>

  <?php
  $name = $_POST['name'] ?? '未填寫';
  $programs = $_POST['program'] ?? [];

  $prices = [
    '1' => 150,
    '2' => 100,
    '3' => 60
  ];

  $total = 0;
  $needLunch = in_array('3', $programs);

  foreach ($programs as $p) {
    if (isset($prices[$p])) {
      $total += $prices[$p];
    }
  }

  echo "<p>" . htmlspecialchars($name) . "，" .
       ($needLunch ? "需要午餐" : "不需要午餐") .
       "，總共 {$total} 元。</p>";
  ?>
</div>

<?php include('footer.php'); ?>
