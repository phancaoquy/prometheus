<?php

function list_book_category($idpro_del)
{
    $sql = "SELECT bk_cate.id , bk_cate.bk_id , books.title as title
    FROM books
    INNER JOIN book_categories as bk_cate on bk_cate.bk_id = books.id
    WHERE books.id =" .$idpro_del;
    $listloai = pdo_query_one($sql);
    return $listloai;
}

function insert_book_category($bk_id, $categ_id)
{
    $sql = "INSERT INTO book_categories (`bk_id`, `categ_id`) 
    VALUES('$bk_id', '$categ_id');
    ";
    pdo_execute($sql);
}

function delete_book_category($bk_id)
{
    $sql = " DELETE FROM book_categories WHERE bk_id=" . $bk_id;
    return pdo_execute($sql);
}

// hiển thị danh mục
function load_All_category(){
    $sql = "SELECT * FROM categories WHERE 1  order by id desc";
    $listCategory = pdo_query($sql);
    return $listCategory;
}
// end hiển thị

// thêm danh mục
function insert_category($categ_name,$categ_description){
    $sql = "INSERT INTO categories(categ_name,categ_description) VALUES(?,?)";
    pdo_execute($sql,$categ_name,$categ_description);
}
// end thêm 

// xóa danh mục
function delete_category($id){
    $sql = "DELETE FROM categories WHERE id=?";
    // kiểm tra catalog có bookcategory (khóa ngoại) ko
    $dsbook_categori=get_bookcategory($id);
    if(is_array($dsbook_categori) && (count($dsbook_categori)>0)){
        $thongbao= "Danh mục này hiện có ".count($dsbook_categori)." sản phẩm. Không được phép xóa";
    }else{
        pdo_execute($sql,$id);
        $thongbao="Xóa thành công";
    }    
    return $thongbao;  
}

function get_bookcategory($id){
    $sql = "SELECT * FROM book_categories WHERE categ_id =?";
    return pdo_query($sql,$id);
}
// end xóa

// cập nhật danh mục
function update_category($categ_name,$categ_description,$id){
    $sql = "UPDATE categories SET categ_name=?,categ_description=? WHERE id=?";
    pdo_execute($sql,$categ_name,$categ_description,$id);
}

function load_name_category()
{
    $sql = "SELECT * FROM categories order by categ_name desc";
    $listloai = pdo_query($sql);
    return $listloai;
}

function load_format()
{
    $sql = "SELECT *
            FROM `formats`
            WHERE 1;";
    $listloai = pdo_query($sql);
    return $listloai;
}

function load_author()
{
    $sql = "SELECT *
            FROM `authors`
            WHERE 1;";
    $listloai = pdo_query($sql);
    return $listloai;
}

function load_publisher()
{
    $sql = "SELECT *
            FROM `publishers`
            WHERE 1;";
    $listloai = pdo_query($sql);
    return $listloai;
}


// end cập nhật



