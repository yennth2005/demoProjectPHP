<?php 
require_once '../../global.php';
require_once '../../dao/hang-hoa.php';
require_once '../../dao/pdo.php';
require_once '../../dao/binh-luan.php';
require_once '../../dao/loai.php';
extract($_REQUEST);
//truy vấn mặt hàng theo mã
$hang_hoa=hang_hoa_select_by_id($ma_hh);
extract($hang_hoa);
//tăng số lượt xem trên 1
hang_hoa_tang_so_luot_xem($ma_hh);

//hàng cùng loại
$hh_cung_loai=hang_hoa_select_by_loai($ma_loai);
//bình luận
if(exist_param("noi_dung")){
    $ma_kh=$_SESSION['user']['ma_kh'];
    $ngay_bl=date_format(date_create(), 'Y-m-d');
    $noi_dung=$_POST['comment'];
    binh_luan_insert($ma_kh, $ma_hh, $noi_dung,$ngay_bl);
}
$binh_luan_list=binh_luan_select_by_hang_hoa($ma_hh);
$loai=loai_getinfor($ma_loai); 
$dsloai=loai_selectAll(); 
$new=hang_hoa_new();
$VIEW_NAME="hang-hoa/chi-tiet-ui.php";
require_once '../layout.php';
?>