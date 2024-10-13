<?php 
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/pdo.php';
extract($_REQUEST);
if(exist_param("btn_change")){
    if($mat_khau2!=$mat_khau3){
        $MESSAGE="Xác nhận mật khẩu không đúng";
    }elseif(strlen($mat_khau2)== "" || strlen($mat_khau2)<3 || strlen($mat_khau2)>10){
        $loi_mat_khau2="Mật khẩu từ 3-10 ký tự";
    }else{
        $user=khach_hang_select_by_id($ma_kh);
        if($user){
            if($user['mat_khau'] == $mat_khau){
                try{
                    khach_hang_change_password($ma_kh,$mat_khau2);
                    $MESSAGE="Đổi mật khẩu thành công";
                }catch(Exception $e){
                    $MESSAGE="Sai mật khẩu";
                }
            }else{
                $MESSAGE="Sai mã đăng nhập";
            }
        }
    }
}
$VIEW_NAME="tai-khoan/doi-mk-form.php";
require '../header.php';
?>