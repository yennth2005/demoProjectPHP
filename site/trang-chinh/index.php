<?php 

// require '../layout.php';
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/hang-hoa.php";
    extract($_REQUEST);
    if(exist_param("gioi-thieu")){
        $VIEW_NAME="gioi-thieu.php";
    }elseif(exist_param("lien-he")){
        $VIEW_NAME="lien-he.php";
    }elseif(exist_param("gop-y")){
        $VIEW_NAME="gop-y.php";
    }elseif(exist_param("hoi-dap")){
        $VIEW_NAME="hoi-dap.php";
    }elseif(exist_param("dang-nhap")){
        $VIEW_NAME="tai-khoan/dang-nhap-form.php";
    }else{
        $items=hang_hoa_selectAll();
        $VIEW_NAME= "home.php";
    }
    $dsloai=loai_selectAll();
    $dac_biet_list=hang_hoa_select_dac_biet();
    $items_all=hang_hoa_select_all_home();
    $new=hang_hoa_new();
    require "../layout.php";
?>