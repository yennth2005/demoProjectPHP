<center><h3>TÀI KHOẢN</h3></center>
<div>
    <div class="information">
        <img src="../../uploaded/users/<?= $_SESSION['user']['hinh']?>" width="200px" height="200px" alt="">
        <div class="information-person">
            <h4>Thông tin tài khoản</h4>
            <table>
                <tr>
                    <th>Họ và tên:</th>
                    <td><?= $_SESSION['user']['ho_ten']?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= $_SESSION['user']['email']?></td>
                </tr>
            </table>
            
       </div>
        <br>
        
    </div>
    <a class="btn btn-outline-danger" href="<?= $SITE_URL?>/tai-khoan/doi-mk.php"><i class="fa-solid fa-lock"></i> Đổi mật khẩu</a>
    <a class="btn btn-outline-info" href="<?= $SITE_URL?>/tai-khoan/cap-nhat-tk.php"><i class="fa-solid fa-user-pen"></i> Cập nhật tài khoản</a>
    <?php 
        if($_SESSION['user']['vai_tro']==1){
            echo "<a href='$ADMIN_URL/trang-chinh' class='btn btn-outline-success'><i class='fa-solid fa-user-shield'></i> Quản trị website</a>";
        }
    ?>
</div>