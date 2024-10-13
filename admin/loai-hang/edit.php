<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">Mã loại</label>
        <input type="text" class="form-control" readonly name="ma_loai" value="<?= $ma_loai?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" value="<?= $ten_loai?>">
    </div>
    
    <input type="submit" class="btn btn-primary" name="btn_update" value="Cập nhật">
    <button type="reset" class="btn btn-primary" name="btn_reset" value="Cập nhật">Nhập lại </button>
</form>


