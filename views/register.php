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
                <img src="./publics/img/logo.svg" alt="logo">
              </div>
              <h4>Đăng Ký Tài Khoản Prometheus</h4>
              <h6 class="font-weight-light">Chỉ Với Vài Bước Đơn Giản !</h6>

              <?php if (isset($error)) : ?>
                <div class="alert alert-danger"> <?= $error ?> </div>
              <?php endif ?>

              <?php if (isset($register_Success)) : ?>
                <div class="alert alert-success"> <?= $register_Success ?> </div>
              <?php endif ?>

              <form action="index.php?pgs=register" method="post" enctype="multipart/form-data" class="pt-3">

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="usr_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="file" id="file-upload" name="avatar">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="fullname" placeholder="Your fullname">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="usr_address" placeholder="Address">
                </div>

                <div class="mb-4">

                  <div class="form-check">

                    <input name="check_dieukhoan" type="checkbox" class="form-check-input">
                    Đồng ý với điều khoản của Prometheus
                    </label>
                    <div class="form-outline">
                      <textarea style="font-size: 12px;" class="form-control" id="textAreaExample1" rows="6">
                                              ĐIỀU KHOẢN
                        Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Quy định và Điều kiện sử dụng, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về quy định và điều kiện được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.

                        Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.

                        1. Hướng dẫn sử dụng web

                        - Khi vào web của chúng tôi, người dùng tối thiểu phải 18 tuổi hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp.

                        - Chúng tôi cấp giấy phép sử dụng để bạn có thể mua sắm trên web trong khuôn khổ điều khoản và điều kiện sử dụng đã đề ra.

                        - Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ đối tác thứ ba nào nếu không được chúng tôi cho phép bằng văn bản. Nếu vi phạm bất cứ điều nào trong đây, chúng tôi sẽ hủy giấy phép của bạn mà không cần báo trước.

                        - Trang web này chỉ dùng để cung cấp thông tin sản phẩm chứ chúng tôi không phải nhà sản xuất nên những nhận xét hiển thị trên web là ý kiến cá nhân của khách hàng, không phải của chúng tôi.

                        - Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.

                        - Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.

                        2. Chấp nhận đơn hàng và giá cả

                        - Chúng tôi có quyền từ chối hoặc hủy đơn hàng của quý khách vì bất kỳ lý do gì vào bất kỳ lúc nào. Chúng tôi có thể hỏi thêm về số điện thoại và địa chỉ trước khi nhận đơn hàng.

                        - Chúng tôi cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho người tiêu dùng. Tuy nhiên, đôi lúc vẫn có sai sót xảy ra, ví dụ như trường hợp giá sản phẩm không hiển thị chính xác trên trang web hoặc sai giá, tùy theo từng trường hợp chúng tôi sẽ liên hệ hướng dẫn hoặc thông báo hủy đơn hàng đó cho quý khách. Chúng tôi cũng có quyền từ chối hoặc hủy bỏ bất kỳ đơn hàng nào dù đơn hàng đó đã hay chưa được xác nhận hoặc đã bị thanh toán.

                        3. Thương hiệu và bản quyền

                        - Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của chúng tôi. Toàn bộ nội dung của trang web được bảo vệ bởi luật bản quyền của Việt Nam và các công ước quốc tế. Bản quyền đã được bảo lưu.
                        </textarea>
                    </div>


                  </div>

                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="btn_sign_up">Đăng Ký</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Bạn đã có tài khoản? <a href="index.php?pgs=login" class="text-primary">Đăng Nhập</a>
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


</html>
