<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thêm Tác giả mới</h4>
      <p class="card-description">
        Thêm Tác giả
      </p>
      <form action="index.php?act=addAuthor" method="post" enctype="multipart/form-data" class="forms-sample">
        <?php if (isset($thongbao)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao ?>
          </div>
        <?php endif ?>

        <div class="form-group">
          <label for="exampleInputName1">Tên Tác Giả</label>
          <input type="text" name="au_name" class="form-control" id="" placeholder="Tên Tác Giả" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Email</label>
          <input type="text" name="au_email" class="form-control" id="" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Mô tả</label>
          <input type="text" name="au_description" class="form-control" id="" placeholder="Mô tả" required>
        </div>

        <button type="reset" name="" class="btn btn-primary mr-2" value="Nhập Lại">Nhập Lại</button>
        <button type="submit" name="button_addAuthor" class="btn btn-primary mr-2">Gửi</button>
        <a class="btn btn-primary mr-2" href="index.php?act=listAuthor"> Danh Sách Tác Giả</a>
        

        <button class="btn btn-light">Thoát</button>


      </form>

    </div>
  </div>
</div>