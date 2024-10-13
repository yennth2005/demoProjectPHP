<?php 
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require "../../global.php";
check_login();
extract($_REQUEST);
if(exist_param("btn_list")){
    $items=loai_selectAll();
    $VIEW_NAME="list.php";
}elseif(exist_param("btn_insert")){
    $ten_loai=$_POST['ten_loai'];
    loai_insert($ten_loai);
    $items=loai_selectAll();
    $VIEW_NAME="list.php";
}
elseif(exist_param("btn_edit")){
    $ma_loai=$_REQUEST['ma_loai'];
    $loai_infor=loai_getinfor($ma_loai);
    extract($loai_infor);
    //show dữ liệu
    $items=loai_selectAll();
    $VIEW_NAME="edit.php";
}
elseif(exist_param("btn_delete")){
    $ma_loai=$_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    $items=loai_selectAll();
    $VIEW_NAME="list.php";
}
elseif(exist_param("btn_update")){
    $ma_loai=$_REQUEST['ma_loai'];
    $ten_loai=$_POST['ten_loai'];
    loai_update($ma_loai,$ten_loai);
    //hiển thị lại danh sách
    $items=loai_selectAll();
    $VIEW_NAME="list.php";
}else{
    $VIEW_NAME="add.php";
}
require "../layout.php";



?>