<form action="index.php" method="POST" enctype="multipart/form-data">
<div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã hàng hoá</label>
            <input type="text" class="form-control" value="<?= $ma_hh?>" readonly  name="ma_hh" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Tên</label>
            <input type="text" class="form-control" name="ten_hh" value="<?= $ten_hh?>" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Đơn giá</label>
            <input  class="form-control" name="don_gia" value="<?= $don_gia?>" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Giảm giá</label>
            <input  class="form-control" name="giam_gia" value="<?= $giam_gia?>" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" name="hinh">
            <input type="hidden" class="form-control" name="up_hinh" value="<?= $hinh?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="">LOẠI HÀNG</label>
            <select name="ma_loai" id="" class="form-select">
                <?php foreach($loai_hang as $loai){
                    extract($loai);
                    $selected = ($loai['ma_loai'] == $items['ma_loai'] ) ? 'selected' : '';
                    echo '<option name="ma_loai"  value="'.$ma_loai.'" '.$selected.'>'.$ten_loai.'</option>';   
                }?>
            </select>
        </div>
        <div class="form-group col-sm-6">
            <label for="">HÀNG ĐẶC BIỆT</label>
            <div class="form-control">
                <label for="" class="radio-inline"><input <?= !$dac_biet ? 'checked' : '' ?> type="radio" name="dac_biet" value="0">Đặc biệt</label>
                <label for="" class="radio-inline"><input <?= $dac_biet ? 'checked' : '' ?> type="radio" name="dac_biet" value="1">Bình thường</label>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Ngày nhập</label>
            <input type="date" class="form-control" name="ngay_nhap" value="<?= $ngay_nhap?>" id="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Số lượt xem</label>
            <input  class="form-control" name="so_luot_xem" readonly value="<?= $so_luot_xem?>" value="<?= $so_luot_xem?>" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="">MÔ TẢ</label>
            <textarea name="mo_ta" class="form-control" rows="4" id="" ><?= $mo_ta?></textarea>
        </div>
        <hr>
        <div class="form-group col-sm-12">
        <button name="btn_update" class="btn btn-outline-info">Cập nhật</button>
        <button type="reset" class="btn btn-outline-info">Nhập lại</button>
        <a href="index.php" class="btn btn-outline-info">Thêm mới</a>
        <a href="index.php?btn_list" class="btn btn-outline-info">Danh sách</a>
    </div>
    </div>
</form>
