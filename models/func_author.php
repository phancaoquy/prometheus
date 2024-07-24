<?php
// Hiển thị danh sách tác giả
    function load_All_Author(){
        $sql = "SELECT * FROM authors ORDER BY id desc";
        return pdo_query($sql);
    }

// Thêm Tác Giả
    function insert_author($au_name,$au_description,$au_email){
        $sql = "INSERT INTO authors(au_name,au_description,au_email) VALUES(?,?,?)";
        pdo_execute($sql,$au_name,$au_description,$au_email);  
    }

//  lấy id author
    function get_oneAuthor($id){
        $sql = "SELECT * FROM authors WHERE id =?";
        return pdo_query_one($sql,$id);
    }
// Sửa 
    function update_author($au_name,$au_email,$au_description,$id){
        $sql = "UPDATE authors SET au_name=?,au_email=?,au_description=? WHERE id=?";
        pdo_execute($sql,$au_name,$au_email,$au_description,$id);
    }
// Xóa
function get_book_au($id){
    $sql = "SELECT * FROM books WHERE au_id =?";
    return pdo_query($sql,$id);
}
function delete_author($id){
    $sql = "DELETE FROM authors WHERE id=?";
    // kiểm tra catalog có bookcategory (khóa ngoại) ko
    $dsbook=get_book_au($id);
    if(is_array($dsbook) && (count($dsbook)>0)){
        $thongbao= "Tên Tác Giả này hiện có ".count($dsbook)." Sách. Không được phép xóa";
    }else{
        pdo_execute($sql,$id);
        $thongbao="Xóa thành công";
    }    
    return $thongbao;  
}
?>