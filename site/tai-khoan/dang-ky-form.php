<div class="row">
    <center><h3>ĐĂNG KÝ TÀI KHOẢN</h3></center>
<form action="dang-ky.php" method="POST" name="myform" onsubmit="return dangKy()" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên đăng nhập</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" value="<?php if(isset($_POST['ma_kh'])) echo $_POST['ma_kh']; ?>"  name="ma_kh" > </div>
                <span id="loi_ma_kh"></span>
            </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Họ và tên</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>    
                <input type="text" class="form-control" value="<?php if(isset($_POST['ho_ten'])) echo $_POST['ho_ten']; ?>"  name="ho_ten">
            </div>
            <span id="loi_ho_ten"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                <input type="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" name="email" aria-describedby="emailHelp">
            </div>
            <div class="error" style="color:red;"><?php if(isset($email_loi)){echo $email_loi;} ?></div>
            <span id="loi_email"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" value="<?php if(isset($_POST['mat_khau'])) echo $_POST['mat_khau']; ?>" name="mat_khau">
            </div>
            <span id="loi_mat_khau"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" value="<?php if(isset($_POST['mat_khau2'])) echo $_POST['mat_khau2']; ?>" name="mat_khau2">
            </div>
            <span id="loi_mat_khau2"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ảnh</label>
            <input type="file"  name="up_hinh">
        </div>
        </div>
    <button name="btn_register" class="btn btn-info">ĐĂNG KÝ</button> <br>
    <input type="hidden" name="vai_tro" value="0">
    <input type="hidden" name="kich_hoat" value="0">
    <?php if(isset($flag)&&$flag==false){ 
        echo "<h3> <i class='fa-solid fa-check-double'></i> Đăng ký thành công</h3><br>"; 
        echo "Chuyển tới <a class='btn btn-success' href='$SITE_URL/trang-chinh?dang-nhap';>Đăng nhập</a>";
    }?>
</form></div>