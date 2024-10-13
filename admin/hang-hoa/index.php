<?php 
require_once "../../dao/pdo.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/loai.php";
require "../../global.php";
check_login();
extract($_REQUEST);
if(exist_param("btn_list")){
    $items=hang_hoa_selectAll();
    $VIEW_NAME="list.php";
}elseif(exist_param("btn_insert")){
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai);
    $items=hang_hoa_selectAll();
    $MESSAGE="THÊM THÀNH CÔNG";
    $VIEW_NAME="add.php";
}
elseif(exist_param("btn_edit")){
    //lấy dữ liệu từ form
    $ma_hh=$_REQUEST['ma_hh'];
    $hang_hoa_infor=hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa_infor);
    //show dữ liệu
    $loai_hang=loai_selectAll();
    $items=hang_hoa_selectAll();
    $VIEW_NAME="edit.php";
}
elseif(exist_param("btn_delete")){
    $ma_hh=$_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh);
    $items=hang_hoa_selectAll();
    $VIEW_NAME="list.php";
}
elseif(exist_param("btn_update")){
    if(isset($_FILES['hinh']) && $_FILES['hinh']['error'] == 0) {
        $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    } else {
        $hinh = hang_hoa_select_by_id($ma_hh)['hinh'];
    }
    hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai);
    //hiển thị lại danh sách
    $items=hang_hoa_selectAll();
    $VIEW_NAME="list.php";
}elseif(exist_param("kyw")){
    $items_search=hang_hoa_select_keyword($kyw);
    $VIEW_NAME="list.php";
}
else{
    global $ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai;
    $VIEW_NAME="add.php";
}
    $loai_hang=loai_selectAll();
    require "../layout.php";
?>