<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prometheus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../publics/css/feather.css">
    <link rel="stylesheet" href="../publics/css/themify-icons.css">
    <link rel="stylesheet" href="../publics/css/publics.bundle.base.css">
    <link rel="stylesheet" href="../publics/css/style2.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="shortcut icon" href="../publics/img/logo fire.svg" />
</head>

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
                            <h4>Cập Nhật Mật Khẩu User <?= $avatar ?></h4>

                            <h6 class="font-weight-light">Thay Đổi Thông Tin Khách Hàng</h6>

                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger"> <?= $error ?> </div>
                            <?php endif ?>

                            <?php if (isset($update_Success)) : ?>
                                <div class="alert alert-success"> <?= $update_Success ?> </div>
                            <?php endif ?>

                            <form action="index.php?pgs=updatePass" method="post" enctype="multipart/form-data" class="pt-3">

                                <div class="form-group group">

                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Mật Khẩu Hiện Tại...">
                                    <i onclick="changeTypepass()" class="fa-regular fa-eye"></i>
                                </div>

                                <div class="form-group group">
                                    <input type="password" class="form-control form-control-lg" id="password_New" name="password_New" placeholder="Mật Khẩu Mới...">
                                    <i onclick="changeTypepassNew()" class="fa-regular fa-eye"></i>

                                </div>

                                <div class="form-group group">
                                    <input type="password" class="form-control form-control-lg" id="password_Confirm" name="password_Confirm" placeholder="Xác Nhận Mật Khẩu...">
                                    <i onclick="changeTypepassConfirm()" class="fa-regular fa-eye"></i>

                                </div>


                                <div class="mt-3">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="btn_updatePass">Cập Nhật Mật Khẩu</button>
                                </div>
                                <!-- <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="index.php?pgs=login" class="text-primary">Login</a>
                </div> -->
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
    <script>
        function changeTypepass() {
            let password = document.getElementById('password');
            if (password.type == 'text') {
                password.type = 'password';
            } else {
                password.type = 'text';
            }
        }

        function changeTypepassNew() {
            let password = document.getElementById('password_New');
            if (password.type == 'text') {
                password.type = 'password';
            } else {
                password.type = 'text';
            }
        }

        function changeTypepassConfirm() {
            let password = document.getElementById('password_Confirm');
            if (password.type == 'text') {
                password.type = 'password';
            } else {
                password.type = 'text';
            }
        }
    </script>
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

</html>