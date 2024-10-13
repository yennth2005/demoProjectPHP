<form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="row">
            <label for="exampleInputPassword1" class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" value="<?=$ma_kh ?>" name="ma_kh" readonly>
    
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" value="<?=$ho_ten ?>" name="ho_ten">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" value="<?=$mat_khau ?>" name="mat_khau">
        </div>
    </div>
    <div class="row">
    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" value="<?=$mat_khau ?>" name="mat_khau2">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" value="<?=$email ?>" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ảnh</label>
            <input type="hidden" value="<?=$hinh?>" name="up_hinh">
            <input type="file" class="form-control" name="hinh">
        </div>
        
    </div>
    <div class="row">
    <div class="mb-3">
  <label for="">KÍCH HOẠT</label>
  <div class="form-control">
    <label for="" class="radio-inline">
      <input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" id="" type="radio" value="1">
      Kích hoạt
    </label>
    <label for="" class="radio-inline">
      <input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" id="" type="radio" value="0">
      Chưa kích hoạt
    </label>
  </div>
</div>

<div class="mb-3">
  <label for="">VAI TRÒ</label>
  <div class="form-control">
    <label for="" class="radio-inline">
      <input <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" id="" type="radio" value="1">
      Nhân viên
    </label>
    <label for="" class="radio-inline">
      <input <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" id="" type="radio" value="0">
      Khách hàng
    </label>
  </div>
</div>
    </div>
    
    <div class="form-group col-sm-12">
        <button name="btn_update" class="btn btn-outline-info">Cập nhật</button>
        <button type="reset" class="btn btn-outline-info">Nhập lại</button>
        <a href="index.php" class="btn btn-outline-info">Thêm mới</a>
        <a href="index.php?btn_list" class="btn btn-outline-info">Danh sách</a>
    </div>
</form>