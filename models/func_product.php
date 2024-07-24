<?php
function insert_product($title, $isbn_10, $isbn_13, $price, $book_description, $fm_id, $au_id, $pub_id, $creation_date)
{
    $sql = "INSERT INTO books (title, isbn_10, isbn_13, price, book_description,fm_id, au_id, pub_id, creation_date) VALUES('$title', '$isbn_10', '$isbn_13', '$price', '$book_description', '$fm_id', '$au_id', '$pub_id', '$creation_date')";
    return pdo_execute_return_lastInsertID($sql);
}




function delete_product($id)
{
    $sql = "DELETE FROM books WHERE id=" . $id;
    pdo_execute($sql);
}

function delete_book_images($bk_id)
{
    $sql = " DELETE FROM book_images WHERE book_id=" . $bk_id;
    return pdo_execute($sql);
}

function insert_images_book($bk_id, $images)
{
    $sql = "INSERT INTO book_images (book_id, images) VALUES('$bk_id', '$images');";
    pdo_execute($sql);
}

// function select_Idimages_book($bk_id, $images)
// {
//     $sql = "UPDATE book_images SET  images ='" . $images . "'  WHERE book_id=" . $bk_id;
//     echo "Upload thành công!";
//     pdo_execute($sql);
// }

function update_images_book($imagesX, $id_img, $bk_id)
{
    $sql = "UPDATE book_images SET  images = ?  WHERE id = ? AND book_id= ?";
    pdo_execute($sql, $imagesX, $id_img, $bk_id);
}

function load_All_book_au_fr_pub()
{

    $sql = "SELECT books.id as id , books.title as title, bk_img.images as image , books.price as price, books.book_description as book_description, books.creation_date as creation_date, fr.fm_name as fr_name, au.au_name as au_name, pub.pub_name as pub_name
    FROM `books` 
    INNER JOIN authors as au on au.id = books.au_id
    INNER JOIN formats as fr on fr.id = books.fm_id
    INNER JOIN publishers as pub on pub.id = books.pub_id
    INNER JOIN book_images as bk_img on bk_img.book_id= books.id
    WHERE bk_img.images LIKE '%_1.jpg' order by bk_img.id ASC";
    $listProduct = pdo_query($sql);
    return $listProduct;
}


function load_showImages_update($id)
{

    $sql = "SELECT images, book_id FROM `book_images` WHERE book_id =" . $id;
    $img = pdo_query($sql);
    return $img;
}

function load_images1($id)
{

    $sql = "SELECT bk_img.book_id as bk_id , bk_img.id as id_img , bk_img.images as images1
    FROM `books`
    INNER JOIN book_images as bk_img on bk_img.book_id = books.id
    WHERE bk_img.book_id = '.$id.' and bk_img.images LIKE '%_1.jpg' ";
    $img = pdo_query($sql);
    return $img;
}

function load_images2($id)
{

    $sql = "SELECT bk_img.book_id as bk_id , bk_img.id as id_img , bk_img.images as images2
    FROM `books`
    INNER JOIN book_images as bk_img on bk_img.book_id = books.id
    WHERE bk_img.book_id = '.$id.' and bk_img.images LIKE '%_2.jpg' ";
    $img = pdo_query($sql);
    return $img;
}

function load_images3($id)
{

    $sql = "SELECT bk_img.book_id as bk_id , bk_img.id as id_img , bk_img.images as images3
    FROM `books`
    INNER JOIN book_images as bk_img on bk_img.book_id = books.id
    WHERE bk_img.book_id = '.$id.' and bk_img.images LIKE '%_3.jpg' ";
    $img = pdo_query($sql);
    return $img;
}






function load_All_hang_hoa_home()
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 order by ma_hh asc limit 0,8";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
}
function load_All_book()
{

    $sql = "SELECT * FROM books WHERE 1 order by id desc ";
    $listProduct = pdo_query($sql);
    return $listProduct;
}

function load_All_hang_hoa($keyword, $maloaihh)
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 ";
    if ($keyword != "") {
        $sql .= " and ten_hh like '%" . $keyword . "%'";
    }
    if ($maloaihh > 0) {
        $sql .= " and ma_loaihh = '" . $maloaihh . "'";
    }
    $sql .= " order by ma_hh desc";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
}



function load_ten_dm($ma_loaihh)
{
    if ($ma_loaihh > 0) {
        $sql = "SELECT * FROM loai WHERE ma_loai=" . $ma_loaihh;
        $loai =  pdo_query_one($sql);
        extract($loai);
        return $ten_loai;
    } else {
        return "";
    }
}

function load_one_product($id)
{
    $sql = "SELECT * 
            FROM books
            WHERE id =" . $id;
    $loai =  pdo_query_one($sql);
    return $loai;
}

function load_hang_hoa_cung_loai($ma_hh, $ma_loaihh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loaihh=" . $ma_loaihh . " AND ma_hh <> " . $ma_hh;
    $loai =  pdo_query($sql);
    return $loai;
}

function update_product($id, $title, $price, $book_description, $updation_date)
{

    $sql = "UPDATE books SET title ='" . $title . "',  price ='" . $price . "',  updation_date ='" . $updation_date . "',  book_description ='" . $book_description . "' WHERE id=" . $id;

    pdo_execute($sql);
}

function count_hang_hoa()
{
    $sql = "SELECT COUNT(`ma_hh`) as SoLuongHangHoa FROM `hang_hoa` WHERE 1;";
    $hanghoa = pdo_query_one($sql);
    return $hanghoa;
}
