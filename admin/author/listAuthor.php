<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh Sách Tác Giả</h4>
        <a href="index.php?act=addAuthor"><button type="button" class="btn btn-primary">Thêm Tác giả</button></a>


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
                <th>Tên Tác Giả</th>
                <th>Email</th>
                <th>Mô tả</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
              foreach ($listAuthor as $author) {
                extract($author);
                $updateAuthor = "index.php?act=updateAuthor&id=" . $id;
                $delAuthor = "index.php?act=delAuthor&id=" . $id;
                echo '
                <tr>
                  <td>' . $i . '</td>
                  <td>' . $au_name . '</td>
                  <td>' . $au_email . '</td>
                  <td>' . $au_description	 . '</td>
                  <td>
                    <a href="' . $updateAuthor . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="' . $delAuthor . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a></td>
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