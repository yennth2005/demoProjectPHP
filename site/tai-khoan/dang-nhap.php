<?php 
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/loai.php';
require '../../dao/hang-hoa.php';
require '../../dao/pdo.php';
extract($_REQUEST);
$flag=true;
if(exist_param("btn_login")){
    $user=khach_hang_select_by_id($ma_kh);
    if($user){
        if($user['mat_khau'] == $mat_khau){
            $flag=false;
            if(exist_param("ghi_nho")){
                add_cookie("ma_kh", $ma_kh , 30);
                add_cookie("mat_khau", $mat_khau, 30);
            }else{
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION['user']=$user;
            // if(isset($_SESSION['request_uri'])){
            //     header("location: ".$_SESSION['request_uri']);
            // }
            header("Location: $SITE_URL/trang-chinh/index.php");
        }else{
            $MESSAGE_PASS="Sai mật khẩu";
            $flag=true;
        }
    
    }else{
        $MESSAGE_USER="Sai tên đăng nhập";
        $flag=true;}
}else{
    if(exist_param("btn_logoff")){
        session_unset();
    }
    $ma_kh=get_cookie("ma_kh");
    $mat_khau=get_cookie("mat_khau");
}

$VIEW_NAME="tai-khoan/dang-nhap-form.php";
require '../header.php';
?>
