<?php 
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/hang-hoa.php";
    extract($_REQUEST);
    if(exist_param("ma_loai")){
        $items=hang_hoa_select_by_loai($ma_loai);
    $loai=loai_getinfor($ma_loai);
        // $VIEW_NAME
    }elseif(exist_param("kyw")){
        $flag=true;
        $items=hang_hoa_select_keyword($kyw);
    }else{
        $items=hang_hoa_selectAll();
    }
    $VIEW_NAME= "liet-ke-ui.php";
    $dsloai=loai_selectAll();
    $dac_biet_list=hang_hoa_select_dac_biet();
    $new=hang_hoa_new();
    require "../layout.php";
?>

