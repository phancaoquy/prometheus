<?php
function load_All_thongke()
{
    $sql = "SELECT loai.ma_loai as maloai, loai.ten_loai as tenloai, count(hang_hoa.ma_hh) as countsp , min(hang_hoa.don_gia) as min_dongia, max(hang_hoa.don_gia) as max_dongia, avg(hang_hoa.don_gia) as trungbinh_dongia";
    $sql.=" FROM hang_hoa left join loai on loai.ma_loai=hang_hoa.ma_loaihh";
    $sql .= " group by loai.ma_loai order by loai.ma_loai desc";
    $list_thongke =  pdo_query($sql);
    return $list_thongke;
}

