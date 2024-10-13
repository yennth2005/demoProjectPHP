<?php 
//truy vấn danh sách loại đã nhập
//mới lên trước
function hang_hoa_selectAll(){
    $sql="SELECT * FROM hang_hoa order by ma_hh desc";
    return pdo_query($sql);
}
function hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql="INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia,hinh,ngay_nhap,mo_ta, dac_biet, so_luot_xem, ma_loai) values (?,?,?,?,?,?,?,?,?)";
    $dac_biet = (int)$dac_biet;
    pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai);
}
function hang_hoa_delete($ma_hh){
    $sql="DELETE FROM hang_hoa WHERE ma_hh=?";
    pdo_execute($sql,$ma_hh);
}
function hang_hoa_getinfor($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql="SELECT * FROM hang_hoa where ma_hh=?";
    return pdo_query_one($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai,$ma_hh);
}
function hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql="UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?,ngay_nhap=?,mo_ta=?,dac_biet=?, so_luot_xem=?, ma_loai=? where ma_hh=?";
    pdo_execute($sql,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai,$ma_hh);
}
function hang_hoa_select_by_id($ma_hh){
    $sql="SELECT * FROM hang_hoa where ma_hh=?";
    return pdo_query_one($sql,$ma_hh);
}
function hang_hoa_exist($ma_hh){
    $sql="SELECT count(*) FROM hang_hoa where ma_hh=?";
    return pdo_query_one($sql,$ma_hh) >0;
}
function hang_hoa_select_by_role($vai_tro){
    $sql="SELECT * FROM hang_hoa where vai_tro=?";
    return pdo_query($sql,$vai_tro);
}
function hang_hoa_select_all_home(){
    $sql="SELECT * FROM hang_hoa order by ma_hh DESC limit 0,9";
    return pdo_query($sql);
}
function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql="UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql,$ma_hh);
}
function hang_hoa_select_top10(){
    $sql="SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem  DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function hang_hoa_select_dac_biet(){
    $sql="SELECT * FROM hang_hoa WHERE dac_biet=0";
    return pdo_query($sql);
}
function hang_hoa_select_by_loai($ma_loai){
    $sql="SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql,$ma_loai);
}
function hang_hoa_select_keyword($keyword){
    $sql="SELECT * FROM hang_hoa hh JOIN loai lo ON lo.ma_loai=hh.ma_loai 
    WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
function hang_hoa_new(){
    $sql="SELECT * FROM hang_hoa WHERE DATEDIFF(CURDATE(), ngay_nhap) <= 16";
    return pdo_query($sql);
}

?>