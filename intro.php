<?php include('header.php'); ?>

<div class="container my-5">
  <h2>報名表單</h2>
  <form action="conference.php" method="post">
    <div class="mb-3">
      <label>姓名:</label>
      <input type="text" name="name" class="form-control" required />
    </div>

    <div class="mb-3">
      <label class="form-label">選擇項目：</label><br />
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="program[]" value="1" id="am" />
        <label class="form-check-label" for="am">上午場 ($150)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="program[]" value="2" id="pm" />
        <label class="form-check-label" for="pm">下午場 ($100)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="program[]" value="3" id="lunch" />
        <label class="form-check-label" for="lunch">需要午餐 ($60)</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">送出</button>
  </form>
</div>

<?php include('footer.php'); ?>
