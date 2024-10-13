<?php 
require '../../global.php';
    if(isset($_SESSION['user'])){
        $VIEW_NAME= 'dang-nhap-infor.php';
    }else{
        $ma_kh = get_cookie("ma_kh");
        $mat_khau = get_cookie("mat_khau");
        $VIEW_NAME= 'dang-nhap-form.php';
    }
    require '../header.php';

?>