<?php
  extract($get_oneFormats);

?>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Cập nhật Danh Mục</h4>
      <p class="card-description">
        Cập nhật Danh Mục
      </p>
      <form action="index.php?act=updateFomarts1" method="post" enctype="multipart/form-data" class="forms-sample">
        <?php if (isset($thongbao)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao ?>
          </div>
        <?php endif ?>

        <div class="form-group">
          <label for="exampleInputName1">Tên Danh Mục</label>
          <input type="text" name="fm_name" class="form-control" id="" placeholder="Tên Danh Mục" value="<?=$fm_name?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Mô tả</label>
          <input type="text" name="fm_description" class="form-control" id="" placeholder="Mô tả" value="<?=$fm_description?>" required>
        </div>
          <input type="hidden" name="fm_id" value="<?=$id?>">
        <button type="reset" name="" class="btn btn-primary mr-2" value="Nhập Lại">Nhập Lại</button>
        <button type="submit" name="button_updateFomarts" class="btn btn-primary mr-2">Cập nhật</button>
        <a class="btn btn-primary mr-2" href="index.php?act=listFormats"> Danh Sách Tên Loại Sách</a>
        

        <button class="btn btn-light">Thoát</button>


      </form>

    </div>
  </div>
</div>