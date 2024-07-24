<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Nhà Xuất Bản</h4>
        <a href="index.php?act=addPublishers"><button type="button" class="btn btn-primary">Thêm Nhà Xuất Bản</button></a>


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
                <th>Tên Nhà Xuất Bản</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Mô tả</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
              foreach ($listPublishers as $publishers) {
                extract($publishers);
                $updatePublishers = "index.php?act=updatePublishers&id=" . $id;
                $delPublishers = "index.php?act=delPublishers&id=" . $id;
                echo '
                <tr>
                  <td>' . $i . '</td>
                  <td>' . $pub_name . '</td>
                  <td>' . $pub_gmail . '</td>
                  <td>' . $pub_address	 . '</td>
                  <td>' . $pub_description	 . '</td>
                  <td>
                    <a href="' . $updatePublishers . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="' . $delPublishers . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a></td>
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