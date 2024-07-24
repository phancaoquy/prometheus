<?php
// hiển thị tất cả loại sách
    function load_All_formats(){
        $sql = "SELECT * FROM formats ORDER BY id DESC";
        return pdo_query($sql);
    }
    // end hiển thị

    // Start lấy một sách
    function get_oneFormats($id){
        $sql = "SELECT * FROM formats WHERE id=?";
        return pdo_query_one($sql,$id);
    }

    // Start add loại sách
    function insert_formats($fm_name,$fm_description){
        $sql = "INSERT INTO formats(fm_name,fm_description) VALUES(?,?)";
        pdo_execute($sql,$fm_name,$fm_description);
    }
    // end add loại sách

    // Start update loại sách
    function  update_formats($fm_name,$fm_description,$id){
        $sql = "UPDATE formats SET fm_name=?,fm_description=? WHERE id=?";
        pdo_execute($sql,$fm_name,$fm_description,$id);
    }

    function get_book($id){
        $sql = "SELECT * FROM books WHERE fm_id =?";
        return pdo_query($sql,$id);
    }

    function delete_formats($id){
        $sql = "DELETE FROM formats WHERE id=?";
        // kiểm tra catalog có bookcategory (khóa ngoại) ko
        $dsbook=get_book($id);
        if(is_array($dsbook) && (count($dsbook)>0)){
            $thongbao= "Tên loại sách  này hiện có ".count($dsbook)." Sách. Không được phép xóa";
        }else{
            pdo_execute($sql,$id);
            $thongbao="Xóa thành công";
        }    
        return $thongbao;  
    }


?>