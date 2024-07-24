<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Khách Hàng</h4>
        <a href="index.php?act=addProduct"><button type="button" class="btn btn-primary">Thêm Sản Phẩm</button></a>


        <div class="table-responsive">
          <table class="table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Hình Ảnh</th>
                <th>Email</th>
                <th>Họ và Tên</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($listUsers as $users) {
                extract($users);
                $updateUsers = "index.php?act=updateUsers&id=" . $id;
                $delUsers = "index.php?act=delUsers&id=" . $id;
                echo '
                <tr>
                  <td>' . $id . '</td>
                  <td>' . $username . '</td>
                  <td class="py-1"> <img src="../images/faces/face1.jpg" alt="image" /> </td>
                  <td>' . $usr_email . '</td>
                  <th>' . $fullname . '</th>
                  <td>' . $phone . '</td>
                  <th>' . $usr_address . '</th>
                  <td>
                    <a href="' . $updateUsers . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="' . $delUsers . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a></td>
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
                <th>User Name</th>
                <th>Hình Ảnh</th>
                <th>Email</th>
                <th>Họ và Tên</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
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