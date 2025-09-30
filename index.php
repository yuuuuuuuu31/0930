<?php include('header.php'); ?>

<div class="container my-5">
  <h2>報名表單</h2>

  <form action="end.php" method="post">
    <div class="mb-3">
      <label>姓名:</label>
      <input type="text" name="name" class="form-control" required />
    </div>

    <hr>

    <label class="form-label">身份:</label><br/>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="status" id="faculty" value="faculty" checked />
      <label class="form-check-label" for="faculty">教職員</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="status" id="student" value="student" />
      <label class="form-check-label" for="student">學生</label>
    </div>

    <hr>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="lunch" value="1" id="lunch" />
      <label class="form-check-label" for="lunch">需要午餐</label>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">送出</button>
  </form>
</div>

<?php include('footer.php'); ?>
