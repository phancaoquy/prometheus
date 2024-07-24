<?php
  extract($get_onePublishers);

?>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Cập nhật Nhà Xuất Bản</h4>
      <p class="card-description">
        Cập nhật Nhà Xuất Bản
      </p>
      <form action="index.php?act=updatePublishers1" method="post" enctype="multipart/form-data" class="forms-sample">
        <?php if (isset($thongbao)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao ?>
          </div>
        <?php endif ?>

        <div class="form-group">
          <label for="exampleInputName1">Tên Nhà Xuất Bản</label>
          <input type="text" name="pub_name" class="form-control" id="" placeholder="Tên Nhà Xuất Bản" value="<?=$pub_name?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Email</label>
          <input type="text" name="pub_gmail" class="form-control" id="" placeholder="Email" value="<?=$pub_gmail?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Địa chỉ</label>
          <input type="text" name="pub_address" class="form-control" id="" placeholder="Địa chỉ" value="<?=$pub_address?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Mô tả</label>
          <input type="text" name="pub_description" class="form-control" id="" placeholder="Mô tả" value="<?=$pub_description?>" required>
        </div>

          <input type="hidden" name="pub_id" value="<?=$id?>">
        <button type="reset" name="" class="btn btn-primary mr-2" value="Nhập Lại">Nhập Lại</button>
        <button type="submit" name="button_updatePublishers" class="btn btn-primary mr-2">Cập nhật</button>
        <a class="btn btn-primary mr-2" href="index.php?act=listPublishers"> Danh Sách Nhà Xuất Bản</a>
        

        <button class="btn btn-light">Thoát</button>


      </form>

    </div>
  </div>
</div>