<div class="content" style="background-color: #fff ;">
<form  action="?update&MALSP=<?= $MALSP ?>" method="post">

  <div class="form-group">
    <label for="exampleInputPassword1">Tên sản phẩm</label>
    <input type="text" id="TENLSP" name="TENLSP" value="<?= $TENLSP ?>" class="form-control" id="exampleInputPassword1" placeholder="Nhập tên sản phẩm ...">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <a href="?list" class="btn btn-success">Trở lại</a>
</form>
</div>