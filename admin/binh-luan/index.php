<?php 
require "../../dao/pdo.php";
require "../../dao/thong-ke.php";
require "../../dao/binh-luan.php";
require "../../global.php";
check_login();
extract($_REQUEST);
if (isset($_REQUEST["btn_delete"])) {
    if (isset($_REQUEST["ma_bl"])) {
        binh_luan_delete($_REQUEST["ma_bl"]);
        $MESSAGE="Xoá thành công";
    }
}
if (isset($_REQUEST["ma_hh"])){
    $items = binh_luan_select_by_hang_hoa($_REQUEST["ma_hh"]);
    $VIEW_NAME = "detail.php";
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>