<h1>THÊM MỚI HÀNG HOÁ</h1>
<?php if(isset($MESSAGE)){
    echo "<h5 class='alert alert-success'>$MESSAGE</h5>";
}?>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã hàng hoá</label>
            <input type="text" class="form-control" readonly  name="ma_hh" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Tên</label>
            <input type="text" class="form-control" name="ten_hh" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Đơn giá</label>
            <input  class="form-control" name="don_gia" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Giảm giá</label>
            <input  class="form-control" name="giam_gia" id="">
        </div>
    </div>
    <div class="row">
        
        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" name="hinh">
        </div>
        <div class="form-group col-sm-6">
            <label for="">LOẠI HÀNG</label>
            <select name="ma_loai" id="" class="form-select">
                <?php foreach($loai_hang as $loai){
                    extract($loai);
                    echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';   
                }?>
            </select>
        </div>
        <div class="form-group col-sm-6">
        <label for="">Đặc biệt</label>
        <div class="form-control">
            <label for="" class="radio-inline">
            <input type="radio" name="dac_biet" value="0"> Đặc biệt
            </label>
            <label for="" class="radio-inline">
            <input type="radio" name="dac_biet" value="1"> Bình thường
            </label>
        </div>
</div>

        <div class="form-group col-sm-6">
            <label for="">Ngày nhập</label>
            <input type="date" class="form-control" name="ngay_nhap" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Số lượt xem</label>
            <input  class="form-control" name="so_luot_xem" readonly value="0" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="">MÔ TẢ</label>
            <textarea name="mo_ta" class="form-control" rows="4" id=""></textarea>
        </div>
        <hr>
        <div class="form-group col-sm-12">
            <a href="index.php?btn_list" class="btn btn-outline-info">Danh sách</a>
            <button type="reset" class="btn btn-outline-success">Nhập lại</button>
            <button class="btn btn-outline-danger" name="btn_insert">Thêm mới</button>
        </div>
    </div>
</form>
