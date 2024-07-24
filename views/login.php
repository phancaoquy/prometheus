
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="publics/img/logo.svg" alt="logo">
              </div>
              <br>
              <h4>Đăng Nhập Prometheus</h4>

              <?php if (isset($_COOKIE['siteAuth'])) : ?>
                    <a style="font-size: 15px;" href="index.php?pgs=rememberAcccount">Đăng Nhập Tài Khoản Gần Đây </a>
                <?php endif ?>

              <h6 class="font-weight-light"></h6>

              <?php if(isset($errorLogin)) :?>
                <div class="alert alert-danger"> <?= $errorLogin ?> </div>
              <?php endif ?>
              
              <form action="index.php?pgs=login" method="post" class="pt-3">
                <div class="form-group">
                  <input type="username" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Tên Đăng Nhập">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Mật Khẩu">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="btn_sign_in">Đăng Nhập</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                     <!-- Ghi Nhớ Tài Khoản -->
                    <input name="check_remember" value="1" type="checkbox" class="form-check-input">
                    Nhớ tài khoản 
                  </div>

                    </label>
                  </div>
                  <a href="index.php?pgs=forgotpass" class="auth-link text-black">Quên Mật Khẩu?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Bạn chưa có tài khoản? <a href="index.php?pgs=register" class="text-primary">Tạo tài khoản</a>
                </div>
               
              </form>

             

                
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../publics/js/publics.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../publics/js/off-canvas.js"></script>
  <script src="../publics/js/hoverable-collapse.js"></script>
  <script src="../publics/js/template.js"></script>
  <script src="../publics/js/setting.js"></script>
  <script src="../publics/js/todolist.js"></script>
  <!-- endinject -->
</body>


