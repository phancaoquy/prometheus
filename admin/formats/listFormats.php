<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Danh Mục</h4>
        <a href="index.php?act=addFormats"><button type="button" class="btn btn-primary">Thêm tên loại sách</button></a>


        <div class="table-responsive">
          <table class="table-striped">
          <?php if (isset($thongbao)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao ?>
          </div>
        <?php endif ?>
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên loại</th>
                <th>Mô tả</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
              foreach ($listFormats as $formats) {
                extract($formats);
                $updateFormats = "index.php?act=updateFormats&id=" . $id;
                $delFormats = "index.php?act=delFormats&id=" . $id;
                echo '
                <tr>
                  <td><strong>' . $i . '</strong></td>
                  <td>' . $fm_name . '</td>
                  <td>' . $fm_description . '</td>
                  <td>
                    <a href="' . $updateFormats . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="' . $delFormats . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a></td>
              </tr>';
                $i++;

              }
              ?>

            </tbody>
           
          </table>
        </div>
      </div>
    </div>
  </div>



  <!-- content-wrapper ends -->
  <!-- partial:../partials/_footer.html -->

  <!-- partial -->
</div>