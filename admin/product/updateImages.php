<?php
if (is_array($product)) {
    extract($product);
}

$images_path1 = "../publics/img/product/books/" . $images1;
$images_path2 = "../publics/img/product/books/" . $images2;
$images_path3 = "../publics/img/product/books/" . $images3;
    if (is_file($images_path1)) {
        $images1 = "<img src='" . $images_path1 . "' height='100'>";
    } else {
        $images1 = "Chưa Có Hình Ảnh Sản Phẩm";
    }
    if (is_file($images_path2)) {
        $images2 = "<img src='" . $images_path2 . "' height='100'>";
    } else {
        $images2 = "Chưa Có Hình Ảnh Sản Phẩm";
    }
    if (is_file($images_path3)) {
        $images3 = "<img src='" . $images_path3 . "' height='100'>";
    } else {
        $images3 = "Chưa Có Hình Ảnh Sản Phẩm";
    }

?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Sản Phẩm : </h4>
            <p class="card-description">
                Cập Nhật Hình Ảnh Sản Phẩm
            </p>
            <form action="index.php?act=updateImages" method="post" enctype="multipart/form-data" class="forms-sample">
                
                <?php if (isset($thongbao)) : ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $thongbao ?>
                    </div>
                <?php endif ?>

                <div class="form-group">
                    <label for="exampleInputName1">Tên Sản Phẩm</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Tên Sản Phẩm" value="<?= $title ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh Bìa Trước</label>
                    <!-- <input type="file" name="images" required> -->
                    <div class="input-group col-xs-12">
                        <td>
                            <input class="form-control file-upload-info" name="ufile[]" type="file" id="ufile[]" size="50" />

                            <?php if (isset($_FILES['ufile'])) : ?>

                                <?= $show_name_img1 ?>
                                <?= $show_img1 ?>

                            <?php endif ?>



                        </td>

                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>

                    </div>
                    <?= $images1 ?>
                </div>

                <div class="form-group">
                    <label>Ảnh Sách</label>
                    <!-- <input type="file" name="images" required> -->
                    <div class="input-group col-xs-12">
                        <td>
                            <input class="form-control file-upload-info" name="ufile[]" type="file" id="ufile[]" size="50" />

                            <?php if (isset($_FILES['ufile'])) : ?>

                                <?= $show_name_img1 ?>
                                <?= $show_img1 ?>

                            <?php endif ?>



                        </td>

                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>

                    </div>
                    <?= $images2 ?>
                </div>

                <div class="form-group">
                    <label>Ảnh Bìa Sau</label>
                    <!-- <input type="file" name="images" required> -->
                    <div class="input-group col-xs-12">
                        <td>
                            <input class="form-control file-upload-info" name="ufile[]" type="file" id="ufile[]" size="50" />

                            <?php if (isset($_FILES['ufile'])) : ?>

                                <?= $show_name_img1 ?>
                                <?= $show_img1 ?>

                            <?php endif ?>



                        </td>

                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>

                    </div>
                    <?= $images3 ?>
                </div>

                <input type="hidden" name="id" value="<?= $id ?>">


                <button type="submit" name="button_updateImages" class="btn btn-primary mr-2">Update</button>
                <a class="btn btn-primary mr-2" href="index.php?act=listProduct"> Danh Sách Sản Phẩm</a>
                <a class="btn btn-light" href="index.php?act=listProduct"> Thoát</a>

            </form>

        </div>
    </div>
</div>