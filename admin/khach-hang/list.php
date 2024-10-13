<h1>Danh sách</h1>
<?php if(isset($MESSAGE)){
    echo "<h5 class='alert alert-success'>$MESSAGE</h5>";
}?>
<a href="index.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> Thêm mới</a>
<form action="index.php" method="post">
<table class="table table-striped">
  <thead class="alert-success">
    <tr>
        <td></td>
        <td>Mã KH</td>
        <td>Họ tên</td>
        <td>Dịa chỉ Email</td>
        <td>Hình Ảnh</td>
        <td>Vai trò</td>
        <td>Kích hoạt</td>
        <td></td>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($items as $item){
        extract($item);
    ?>
    <tr>
        <th><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh?>" id=""></th>
        <td><?=$ma_kh?></td>
        <td><?=$ho_ten ?></td>
        <td><?=$email ?></td>
        <td><img src="<?= $UPLOAD_URL?>users/<?=$hinh ?>" width="50px" height="50px" alt=""></td>
        <td><?=($vai_tro==1)?"Nhân viên": "Khách hàng" ?></td>
        <td><?=($kich_hoat==1)?"Kích hoạt": "Chưa kích hoạt" ?></td>
        
        <td>
        <a href="index.php?btn_edit&ma_kh=<?= $ma_kh?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
        <a href="index.php?btn_delete&ma_kh=<?= $ma_kh?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xoá</a>
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

