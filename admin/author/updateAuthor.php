<?php
  extract($get_oneAuthor);

?>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Cập nhật Danh Mục</h4>
      <p class="card-description">
        Cập nhật Danh Mục
      </p>
      <form action="index.php?act=updateAuthor1" method="post" enctype="multipart/form-data" class="forms-sample">
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
          <input type="text" name="au_name" class="form-control" id="" placeholder="Tên Danh Mục" value="<?=$au_name?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Email</label>
          <input type="text" name="au_email" class="form-control" id="" placeholder="Email" value="<?=$au_email?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Mô tả</label>
          <input type="text" name="au_description" class="form-control" id="" placeholder="Mô tả" value="<?=$au_description?>" required>
        </div>
          <input type="hidden" name="au_id" value="<?=$id?>">
        <button type="reset" name="" class="btn btn-primary mr-2" value="Nhập Lại">Nhập Lại</button>
        <button type="submit" name="button_updateAuthor" class="btn btn-primary mr-2">Cập nhật</button>
        <a class="btn btn-primary mr-2" href="index.php?act=listAuthor"> Danh Sách Giả</a>
        

        <button class="btn btn-light">Thoát</button>


      </form>

    </div>
  </div>
</div>