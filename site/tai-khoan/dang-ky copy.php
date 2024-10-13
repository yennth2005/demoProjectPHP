<?php 
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/pdo.php';
extract($_REQUEST);
$flag=true;
if(exist_param("btn_register")){
// Giả sử dữ liệu đã được gửi từ form và lưu vào các biến tương ứng
$ten = $_POST['ho_ten'];
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];
$xac_nhan_mat_khau = $_POST['mat_khau2'];

// Khởi tạo mảng để lưu các thông báo lỗi
$errors = [];

// Validate từng trường
if (empty($ten)) {
    $errors['ho_ten'] = "Vui lòng nhập họ và tên";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Địa chỉ email không hợp lệ";
}

if (strlen($mat_khau) < 8 || 
    !preg_match('/[A-Z]/', $mat_khau) || 
    !preg_match('/[a-z]/', $mat_khau) || 
    !preg_match('/\d/', $mat_khau)) {
    $errors['mat_khau'] = "Mật khẩu phải có ít nhất 8 ký tự, chứa ít nhất 1 chữ cái in hoa, 1 chữ cái thường và 1 số";
}

if ($mat_khau !== $xac_nhan_mat_khau) {
    $errors['mat_khau2'] = "Hai mật khẩu không trùng khớp";
}

// Nếu có lỗi, chuyển hướng về trang đăng ký với các thông báo lỗi
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: dang-ky-form.php');
    exit();
} else {
    // Nếu không có lỗi, tiến hành xử lý dữ liệu (ví dụ: lưu vào database)
    // ...
}

    // if(!khach_hang_exist($ma_kh)){
    //     $MESSAGE= "Mã này không sử dụng được!";
    // }else{
    //     $file_name=save_file("up_hinh","$IMAGE_DIR/users");
    //     $hinh=$file_name?$file_name:"user.png";
    //     try{
    //         khach_hang_insert($ma_kh,$mat_khau,$ho_ten,$email,$hinh,$kich_hoat,$vai_tro);
    //         $flag=false;
    //     }catch(Exception $e){
    //         $flag=true;
    //     }
    // }
}
// else{
//     global $ma_kh,$mat_khau,$ho_ten,$email,$hinh,$kich_hoat,$vai_tro,$mat_khau2;
// }
$VIEW_NAME= "tai-khoan/dang-ky-form.php";
require '../header.php';
?>