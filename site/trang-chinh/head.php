<div class="infor">
    <section class="one">
    <div class="">Welcome to HaiYen's Shop</div>
    <div class=""><i class="fa-solid fa-phone"></i> 09787387378</div>
    </section>
    <section>
<?php if(isset($_SESSION['user'])){
    ?>
    
    <div class="dropdown">
<div class="btn btn-outline-light">
<?= $_SESSION['user']['ho_ten']?>
    <img width="50px" height="50px" style="border-radius: 50% ;" src="<?= $ROOT_URL?>/uploaded/users/<?= $_SESSION['user']['hinh']?>" alt=""> 
</div>
<div class="dropdown-content">
    <a href="<?= $SITE_URL?>/trang-chinh/dang-nhap.php" class="list-group-item"><i class="fa-regular fa-circle-user"></i> Tài khoản của tôi</a> <br>
    <a href="<?= $SITE_URL?>/tai-khoan/doi-mk.php" class="list-group-item"><i class="fa-solid fa-lock"></i> Đổi mật khẩu</a> <br>
    <?php 
if($_SESSION['user']['vai_tro']==1){
    echo "<a href='$ADMIN_URL/trang-chinh' class='list-group-item'><i class='fa-solid fa-shield-halved'></i> Quản trị website</a><br>";
}
    ?>
    <a href="<?= $SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff" class="list-group-item"><i class="fa-solid fa-arrow-right-to-bracket"></i> Đăng xuất</a> <br>
    </div>
    </div>
    <?php }else{?>
<a href="<?= $SITE_URL?>/trang-chinh?dang-nhap" class="btn btn-outline-light">Đăng nhập</a>
<?php }?>
    </section>
</div>