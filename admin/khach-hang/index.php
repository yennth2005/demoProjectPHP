<?php 
require_once "../../dao/pdo.php";
require_once "../../dao/khach-hang.php";
require "../../global.php";
check_login();
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = khach_hang_selectAll();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
    $hinh=save_file("hinh","$UPLOAD_URL/users/");
    khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_edit")) {
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_infor = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_infor);
    //show dữ liệu
    $items = khach_hang_selectAll();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    $items = khach_hang_selectAll();
    $MESSAGE="XOÁ THÀNH CÔNG";
    $VIEW_NAME = "list.php";
}elseif (exist_param("btn_update")) {
    if(isset($_FILES['hinh']) && $_FILES['hinh']['error'] == 0) {
        $hinh=save_file("hinh","$UPLOAD_URL/users/");
    } else {
        $hinh = khach_hang_select_by_id($ma_kh)['hinh'];
    }
    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
    //hiển thị lại danh sách
    $items = khach_hang_selectAll();
    $VIEW_NAME = "list.php";
}else {
    $VIEW_NAME = "add.php";
}
$items = khach_hang_selectAll();
require "../layout.php";
?>
