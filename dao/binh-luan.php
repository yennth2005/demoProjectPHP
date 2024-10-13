<?php 
//truy vấn danh sách loại đã nhập
//mới lên trước
function binh_luan_selectAll(){
    $sql="SELECT * FROM binh_luan bl order by ma_bl";
    return pdo_query($sql);
}
function binh_luan_insert($ma_kh, $ma_hh,$noi_dung,$ngay_bl){
    $sql="INSERT INTO binh_luan(ma_kh,ma_hh,noi_dung,ngay_bl) values (?,?,?,?)";
    pdo_execute($sql,$ma_kh, $ma_hh,$noi_dung,$ngay_bl);
}
function binh_luan_delete($ma_bl) {
    $sql = "DELETE FROM binh_luan WHERE ma_bl = ?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

function binh_luan_select_by_id($ma_bl){
    $sql="SELECT * FROM binh_luan where ma_bl=?";
    return pdo_query_one($sql,$ma_bl);
}
function binh_luan_exist($ma_bl){
    $sql="SELECT count(*) FROM binh_luan where ma_bl=?";
    return pdo_query_one($sql,$ma_bl);
}
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql="SELECT b.*,h.ten_hh FROM binh_luan b INNER JOIN hang_hoa h ON h.ma_hh=b.ma_hh  where b.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql,$ma_hh);
}
?>