<h1>Thêm mới</h1>

<form action="index.php" method="POST">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã loại</label>
            <input type="text" class="form-control" readonly name="ma_loai" value="auto_number"><br>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Tên loại</label>
            <input type="text" class="form-control" name="ten_loai">
        </div>
    </div>
    <br>
    <button name="btn_insert" class="btn btn-outline-success">Thêm mới</button>
    <button type="reset" class="btn btn-outline-danger">Nhập lại</button>
    <a href="index.php?btn_list" class="btn btn-outline-info">Danh sách</a>
</form>
