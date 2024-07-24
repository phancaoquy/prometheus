<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Sản Phẩm</h4>
        <div class="col-sm-6 col-md-4 col-lg-3">
        </div>

        <?php if (isset($thongbao)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao ?>
          </div>
        <?php endif ?>

        <?php if (isset($thongbao_del)) : ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $thongbao_del ?>
          </div>
        <?php endif ?>

        <a href="index.php?act=addProduct">
          <button type="button" class="btn btn-primary">
            <i class="far fa-plus-square" style="color: #ffffff;"></i>
            Thêm Sản Phẩm
          </button>
        </a>


        <div class="table-responsive">
          <table id="example" class="display expandable-table" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                <th>Hình Ảnh</th>
                <th>Giá</th>
                <th>Loại Sách</th>
                <th>Tác Giả</th>
                <th>Nhà Xuất Bản</th>
                <th>Ngày Xuất Bản</th>
                <th>Thao Tác</th>


              </tr>
            </thead>
            <tbody>
              <?php

              foreach ($listbook_au_fr_pub as $product) {
                extract($product);
                $updateProduct = "index.php?act=page_updateProduct&id=" . $id;
                $updateImages = "index.php?act=page_updateImages&id=" . $id;
                $delProduct = "index.php?act=delProduct&id=" . $id;
                $image_path = "../publics/img/product/books/" . $image;
                if (is_file($image_path)) {
                  $image = "<img src='" . $image_path . "' height='100'>";
                } else {
                  $image = "Chưa Có Hình Ảnh Sản Phẩm";
                }
                echo '
                <tr>
                  <td>' . $id . '</td>
                  <td>' . $title . '</td>
                  <td>' . $image . '</td>
                  <td>' . $price . '</td>
                  <th>' . $fr_name . '</th>
                  <td>' . $au_name . '</td>
                  <th>' . $pub_name . '</th>
                  <td>' . $creation_date . '</td>
                  <td>
                    <a href="' . $updateProduct . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa Thông Tin</a>
                    <a href="' . $updateImages . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa Ảnh</a>
                    <a href="' . $delProduct . '" class="btn btn-danger"><i class="far fa-tv style="color: #ffffff;"></i> Xóa</a></td>
              </tr>';
              }
              ?>


              <!-- 
              <tr>
                <td>1</td>
                <td>Herman Beck</td>
                <td class="py-1"> <img src="../images/faces/face1.jpg" alt="image" /> </td>
                <td>$ 77.99</td>
                <th>Ebooks</th>
                <td>Jane Austen</td>
                <th>Kim Đồng</th>
                <td>May 15, 2015</td>
                <td>May 15, 2015</td>
              </tr> -->

            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                <th>Hình Ảnh</th>
                <th>Giá</th>
                <th>Loại Sách</th>
                <th>Tác Giả</th>
                <th>Nhà Xuất Bản</th>
                <th>Ngày Xuất Bản</th>
                <th>Thao Tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>



  <!-- content-wrapper ends -->
  <!-- partial:../partials/_footer.html -->

  <!-- partial -->
</div>