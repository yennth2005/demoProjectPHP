<?php 
session_start();
//Định nghĩa các url cần thiết sử dụng trong website
$ROOT_URL="/yennthph50871";
$CONTENT_URL="$ROOT_URL/content";
$ADMIN_URL="$ROOT_URL/admin";
$SITE_URL="$ROOT_URL/site";
// $SL_PER_PAGE=10;
$UPLOAD_URL= "../../uploaded/";
//2 biến toàn cục cần thiết đê chia sẻ giữa controller và view
// $VIEW_NAME="";
// $MESSAGE="";

//kiểm tra sự tồn tại của 1 tham số trong request
// param string
// return boolean
/**
 * param string $fieldname là tên của tham số cần kiểm tra
 * return boolean true tồn tại
 */
function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}
/**
 * @param string $fieldname là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return //tên file upload
 */

function save_file($fieldname,$target_dir){
    $file_uploaded=$_FILES[$fieldname];
    $file_name=basename($file_uploaded["name"]);
    $target_path=$target_dir.$file_name;
    move_uploaded_file($file_uploaded["tmp_name"],$target_path);
    return $file_name;
}

/**
 * param string $name là tên cookie
 * param string $value giá trị cookie
 * param int $day là số ngày tồn tại cookie
 */

 function add_cookie($name,$value,$day){
    setcookie($name,$value,time() + (86400*$day), "/");
 }
/**
 * param string $name là tên cookie
 */
function delete_cookie($name){
    add_cookie($name, "", -1);
}
/**
 * param string $name là tên cookie
 * return string là giá trị coookie
 */
function get_cookie($name){
    return $_COOKIE[$name]??'';
}

/**
 * Kiểm tra đăng nhập và vai trò của đăng nhập
 * Các php trong admin và php yêu cầu phải đăng nhập mới được
 * phép sử dụng thì cần thiết phải gọi hàm này trước
 */
function check_login(){
    global $SITE_URL;
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['vai_tro'] == 1){
            return;
        }
        if(stripos($_SERVER["REQUEST_URI"], '/admin/')==FALSE){
            return;
        }
    }
    header("location: $SITE_URL/tai-khoan/dang-nhap.php");
    exit();
}
?>