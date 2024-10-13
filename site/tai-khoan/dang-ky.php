<?php 
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/pdo.php';
extract($_REQUEST);

if(exist_param("btn_register")){
    $flag=true;
    if(!khach_hang_exist($ma_kh)){
        echo '<script>alert("Tên đăng nhập đã tồn tại")</script>';
    }
    else{
        $file_name=save_file("up_hinh","$UPLOAD_URL/users/");
        $hinh=$file_name?$file_name:'user.png';
        try{
            khach_hang_insert($ma_kh,$mat_khau,$ho_ten,$email,$hinh,$kich_hoat,$vai_tro);
            $flag=false;
        }catch(Exception $e){
            $flag=true;
        }
    }
}else{
    global $ma_kh,$mat_khau,$ho_ten,$email,$hinh,$kich_hoat,$vai_tro,$mat_khau2;
}
$VIEW_NAME= "tai-khoan/dang-ky-form.php";
require '../header.php';
?>