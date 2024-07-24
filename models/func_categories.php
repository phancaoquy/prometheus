<?php
require_once 'pdo.php';

/*
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function query_categories(){
    $sql = "SELECT * FROM categories ORDER BY ID ASC LIMIT 8";
    return pdo_query($sql);
}

function query_language(){
    $sql = "SELECT * FROM categories ORDER BY ID DESC LIMIT 2";
    return pdo_query($sql);
}


function categs_list($categs_list){
    $html_categ='';
    foreach ($categs_list as $categ) {
        extract($categ);
        $link='index.php?pgs=books&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}


function categs_list_ebooks($categs_list){
    $html_categ='';
    $categ_name = "";
    foreach ($categs_list as $categ) {
        extract($categ);
        $link='index.php?pgs=eBooks&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}


function categs_list_audioBooks($categs_list){
    $html_categ='';
    $categ_name = "";
    foreach ($categs_list as $categ) {
        extract($categ);
        $link='index.php?pgs=audioBooks&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}

function lang_list($lang_list){
    $html_categ='';
    foreach ($lang_list as $lang) {
        extract($lang);
        $link='index.php?pgs=books&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}

function lang_list_ebooks($lang_list){
    $html_categ='';
    foreach ($lang_list as $lang) {
        extract($lang);
        $link='index.php?pgs=eBooks&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}

function lang_list_audioBooks($lang_list){
    $html_categ='';
    foreach ($lang_list as $lang) {
        extract($lang);
        $link='index.php?pgs=audioBooks&categ_id='.$id;
        $html_categ.='<a class="categs_link" href="'.$link.'">'.$categ_name.'</a>';
    }
    return $html_categ;
}

function get_categ_name($categ_id){
    $sql = "SELECT categ_name FROM categories WHERE id=".$categ_id;
    $page_title=pdo_query_one($sql);
    return $page_title["categ_name"];
}

function get_categ_id($id)
{
    $sql = "SELECT *
    FROM categories
    WHERE id=?";
    return pdo_query_value($sql, $id);
}
    
