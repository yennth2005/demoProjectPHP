<div class="row">
<form action="doi-mk.php" name="myform" onsubmit="return doiMk()" method="post">
    <div class="mb-3">
        <label for="" class="form-label">Tên đăng nhập</label>
        <input class="form-control" type="text" name="ma_kh" readonly value="<?= $_SESSION['user']['ma_kh']?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mật khẩu hiện tại</label>
        <input class="form-control" type="password" name="mat_khau">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mật khẩu mới</label>
        <input class="form-control" type="password" name="mat_khau2">
        <?php if(isset($loi_mat_khau2)){echo "<span style='color:red;'>$loi_mat_khau2</span>";}?>

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Xác nhận mật khẩu</label>
        <input class="form-control" type="password" name="mat_khau3">
        <span class="loi_mat_khau3"></span>
    </div>
    <div >
        <button class="btn btn-info" name="btn_change">Đổi mật khẩu</button>
    </div>
</form>
<?php   
    if (isset($MESSAGE)) {
        echo "<span>".$MESSAGE."</span>";
    }
?>
</div>