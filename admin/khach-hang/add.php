<h1>THÊM MỚI KHÁCH HÀNG</h1>
<?php if(isset($MESSAGE)){
    echo "<h5 class='alert alert-success'>$MESSAGE</h5>";
}?>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã khách hàng</label>
            <input type="text" class="form-control" name="ma_kh" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Họ Tên</label>
            <input type="text" class="form-control" name="ho_ten" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" name="mat_khau" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" name="hinh">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Kích hoạt</label>
            <div class="form-control">
                <label for="" class="radio-inline">
                <input type="radio" name="kich_hoat" value="0" checked> Chưa kích hoạt
                </label>
                <label for="" class="radio-inline">
                <input type="radio" name="kich_hoat" value="1"> Kích hoạt
                </label>
            </div>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Vai trò</label>
            <div class="form-control">
                <label for="" class="radio-inline">
                <input type="radio" name="vai_tro" value="0"> Khách hàng
                </label>
                <label for="" class="radio-inline">
                <input type="radio" name="vai_tro" value="1"> Nhân viên
                </label>
            </div>
            </div>
    
    <a href="index.php?btn_list" class="btn btn-outline-info">Danh sách</a>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <button class="btn btn-outline-danger" name="btn_insert">Thêm mới</button>
</form>
