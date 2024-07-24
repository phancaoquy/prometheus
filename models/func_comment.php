<?php
function insert_binhluan($noi_dung, $ma_hh_bl, $id_kh_bl, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hh_bl, id_kh_bl, ngay_bl) VALUES('$noi_dung', '$ma_hh_bl', '$id_kh_bl', '$ngay_bl')";
    pdo_execute($sql);
}
function load_All_binhluan($ma_hh_bl)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_hh_bl='".$ma_hh_bl."' order by ma_bl desc";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}
