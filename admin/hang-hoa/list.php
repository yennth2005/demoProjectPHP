<h1>Danh sách</h1>
  <form action="index.php">
  <div class="input-group mb-3">
    <input name="kyw" class="form-control" placeholder="Tìm kiếm sản phẩm" type="search">
    <button type="submit" class="btn btn-outline-secondary" name="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
   </div>
  </form>
<a href="index.php" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Thêm mới</a>
<?php if(isset($_REQUEST['kyw'])){?>
<form action="index.php" method="post">
<table class="table table-striped">
  <thead class="alert-success">
    <tr>
        <td></td>
        <td>STT</td>
        <td>Tên hàng</td>
        <td>Đơn giá</td>
        <td>Giảm giá</td>
        <td>Số lượt xem</td>
        <td>Mô tả</td>
        <td>Ngày nhập</td>
        <td>Hình ảnh</td>
        <td>Phân loại</td>
        <td>Mã loại</td>
        <td>Thao tác</td>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count=0;
    foreach($items_search as $item){
        extract($item);
        $count++;
    ?>
    <tr>
        <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_kh?>" id=""></th>
        <td><?= $count?></td>
        <td><?=$ten_hh ?></td>
        <td><?=$don_gia ?></td>
        <td><?=$giam_gia ?></td>
        <td><?=$so_luot_xem?></td>
        <td><?=$mo_ta ?></td>
        <td><?=$ngay_nhap ?></td>
        <td><img src="<?= $UPLOAD_URL?>products/<?=$hinh ?>" alt=""></td>
        <td><?= ($dac_biet==1)?"Bình thường":"Đặc biệt"?></td>
        <td><?=$ma_loai ?></td>
        <td>
        <a href="index.php?btn_edit&ma_hh=<?= $ma_hh?>&ma_loai=<?= $ma_loai?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
        <a href="index.php?btn_delete&ma_hh=<?= $ma_hh?>" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xoá</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
  <tfoot>
    <tr>
        <td colspan="7">
            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
            <button type="button" id="clear-all" class="btn btn-default">Bỏ chọn tất cả</button>
        </td>
    </tr>
  </tfoot>
</table>
</form>
<?php }else{?>
<form action="index.php" method="post">
<table class="table table-striped">
  <thead class="alert-success">
    <tr>
        <td></td>
        <td>STT</td>
        <td>Tên hàng</td>
        <td>Đơn giá</td>
        <td>Giảm giá</td>
        <td>Số lượt xem</td>
        <td>Mô tả</td>
        <td>Ngày nhập</td>
        <td>Hình ảnh</td>
        <td>Phân loại</td>
        <td>Mã loại</td>
        <td>Thao tác</td>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count=0;
    foreach($items as $item){
        extract($item);
        $count++;
    ?>
    <tr>
        <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_kh?>" id=""></th>
        <td><?= $count?></td>
        <td><?=$ten_hh ?></td>
        <td><?=$don_gia ?></td>
        <td><?=$giam_gia ?></td>
        <td><?=$so_luot_xem?></td>
        <td><?=$mo_ta ?></td>
        <td><?=$ngay_nhap ?></td>
        <td><img src="<?= $UPLOAD_URL?>products/<?=$hinh ?>" alt=""></td>
        <td><?= ($dac_biet==1)?"Bình thường":"Đặc biệt"?></td>
        <td><?=$ma_loai ?></td>
        <td>
        <a href="index.php?btn_edit&ma_hh=<?= $ma_hh?>&ma_loai=<?= $ma_loai?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
        <a href="index.php?btn_delete&ma_hh=<?= $ma_hh?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xoá</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
  <tfoot>
    <tr>
        <td colspan="7">
            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
            <button type="button" id="clear-all" class="btn btn-default">Bỏ chọn tất cả</button>
        </td>
    </tr>
  </tfoot>
</table>
</form>
<?php }?>
