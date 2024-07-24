<?php
    function load_All_publishers(){
        $sql = "SELECT * FROM publishers ORDER BY id desc";
        return pdo_query($sql);
    }

    function insert_publishers($pub_name,$pub_gmail,$pub_address,$pub_description){
        $sql = "INSERT INTO publishers(pub_name,pub_gmail,pub_address,pub_description) VALUES(?,?,?,?)";
        pdo_execute($sql,$pub_name,$pub_gmail,$pub_address,$pub_description);  
    }

    function get_onePublishers($id){
        $sql = "SELECT * FROM publishers WHERE id=?";
        return pdo_query_one($sql,$id);
    }

    function update_publishers($pub_name,$pub_gmail,$pub_address,$pub_description,$id){
        $sql = "UPDATE publishers SET pub_name=?,pub_gmail=?,pub_address=?,pub_description=? WHERE id=?";
        pdo_execute($sql,$pub_name,$pub_gmail,$pub_address,$pub_description,$id);
    }

    function delete_publishers($id){
        $sql = "DELETE FROM publishers WHERE id=?";
        // kiểm tra catalog có bookcategory (khóa ngoại) ko
        $dsbook=get_book_pub($id);
        if(is_array($dsbook) && (count($dsbook)>0)){
            $thongbao= "Tên Tác Giả này hiện có ".count($dsbook)." Sách. Không được phép xóa";
        }else{
            pdo_execute($sql,$id);
            $thongbao="Xóa thành công";
        }    
        return $thongbao; 
    }

    function get_book_pub($id){
        $sql = "SELECT * FROM books WHERE pub_id =?";
        return pdo_query($sql,$id);
    }

?>