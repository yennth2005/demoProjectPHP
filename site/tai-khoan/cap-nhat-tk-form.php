<center><h3>Cập nhật tài khoản</h3></center>
<form action="cap-nhat-tk.php" method="post" name="myform" onsubmit="return capNhatTaiKhoan()" enctype="multipart/form-data">
    <div class="row">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" readonly value="<?=$ma_kh ?>" name="ma_kh" >
            <span id="loi_ma_kh"></span>
        </div>    
    
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" value="<?=$ho_ten ?>" name="ho_ten">
            <span id="loi_ho_ten"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" value="<?=$email ?>" name="email" aria-describedby="emailHelp">
            <span id="loi_email"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ảnh</label>
            <input type="file"  name="up_hinh">
            <span id="loi_hinh"></span>
        </div>
    </div>
    <input type="hidden" name="vai_tro" value="0">
    <input type="hidden" name="kich_hoat" value="0">
    <input type="hidden" name="mat_khau" value="<?= $mat_khau?>">
    <input type="hidden" name="hinh" value="<?= $hinh?>">
    <center><button class="btn btn-outline-info" name="btn_update">Cập nhật</button></center><br>
    <?php   
        if (isset($MESSAGE)) {
            echo "<div class='alert alert-success'>".$MESSAGE."</div>";
        }
    ?>
</form>
<script>
    function capNhatTaiKhoan(){
        var ma_kh=document.myform.ma_kh.value;
        var ho_ten=document.myform.ho_ten.value;
        var email=document.myform.email.value;
        var anh =document.myform.up_hinh.value;
        var kt=false;
        if(ma_kh.length==0){
            document.getElementById('loi_ma_kh').innerHTML="Không được bỏ trống";
            kt=false;
        }else if(ma_kh.length<3 || ma_kh.length>30){
            document.getElementById('loi_ma_kh').innerHTML="Tên đăng nhập có độ dài từ 3 - 30 ký tự";
            kt=false;
        }else if(!/[A-Za-z]/.test(ma_kh) || !/[1-9]/.text(ma_kh)){
            document.getElementById('loi_ma_kh').innerHTML="Tên đăng nhập bao gồm chữ và số"
        }else{
            document.getElementById('loi_ma_kh').innerHTML = "";
        }
        if(ho_ten.length==0){
            document.getElementById('loi_ho_ten').innerHTML="Không được bỏ trống";
            kt=false;
        }else{
            document.getElementById('loi_ho_ten').innerHTML="";
        }
        if(email.length==0){
            document.getElementById('loi_email').innerHTML="Không được bỏ trống";
            kt=false;
        }else{
            document.getElementById('loi_email').innerHTML="";
            
        }
        return kt;
    }
</script>