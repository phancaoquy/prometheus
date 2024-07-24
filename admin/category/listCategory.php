<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Danh Mục</h4>
        <a href="index.php?act=addCategory"><button type="button" class="btn btn-primary">Thêm Danh Mục</button></a>


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
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
              foreach ($listCategory as $category) {
                extract($category);
                $updateCategory = "index.php?act=updateCategory&id=" . $id;
                $delCategory = "index.php?act=delCategory&id=" . $id;
                echo '
                <tr>
                  <td>' . $i . '</td>
                  <td>' . $categ_name . '</td>
                  <td>' . $categ_description . '</td>
                  <td>
                    <a href="' . $updateCategory . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="' . $delCategory . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a></td>
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