<div class="row">
<center><h2>TÀI KHOẢN</h2></center>
    <form action="<?= $SITE_URL?>/tai-khoan/dang-nhap.php" name="myform" onsubmit="return dangNhap()" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
            <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="ma_kh" id="ma_kh" class="form-control" aria-describedby="emailHelp" value="<?php if(isset($_POST['ma_kh'])) echo $_POST['ma_kh']; ?>">
            </div>
            <?php   
                if (isset($MESSAGE_USER)) {
                    echo "<span>".$MESSAGE_USER."</span>";
                }
            ?>
            <span id="loi_ma_kh"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" name="mat_khau" id="mat_khau" class="form-control">
            </div>
            <?php   
                if (isset($MESSAGE_PASS)) {
                    echo "<span>".$MESSAGE_PASS."</span>";
                }
            ?>
            <span id="loi_mat_khau"></span>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="ghi_nho" id="ghi_nho" class="form-check-input" checked>
            <label for="ghi_nho" class="form-check-label">Ghi nhớ tài khoản?</label>
        </div>
        <div class="mb-3">
            <button name="btn_login" class="btn btn-primary">Đăng nhập</button>
        </div>
        <div class="mb-3">
            <ul class="list-unstyled">
                <li><a href="<?= $SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                <li><a href="<?= $SITE_URL?>/tai-khoan/dang-ky.php">Đăng kí thành viên</a></li>
            </ul>
        </div>
        <?php if(isset($flag)&&$flag==false){ 
            echo "<div class='mb-3'>
            <h3> <i class='fa-solid fa-check-double'></i> Đăng nhập thành công</h3>
            <a href='$SITE_URL/trang-chinh?trang-chu' class='btn btn-success'><i class='fa-solid fa-house-user'></i> Chuyển tới trang chủ</a>
        </div>"; 
        }?>
    </form>
</div>
<?php if(isset($MESSAGE)){echo "<h6 style='color:red;'>$MESSAGE</h6>";}?>