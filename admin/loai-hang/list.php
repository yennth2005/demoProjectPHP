<h1>Danh sách</h1>
<form action="index.php" method="post">
<table class="table table-striped">
  <thead>
    <tr>
        <td>Mã loại</td>
        <td>Tên loại</td>
        <td>Thao tác</td>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($items as $loai){
        extract($loai);
    ?>
    <tr>
        <td><?= $loai['ma_loai']?></td>
        <td><?= $loai['ten_loai']?></td>
        <td>
        <a href="index.php?btn_edit&ma_loai=<?= $ma_loai?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
        <a href="index.php?btn_delete&ma_loai=<?= $ma_loai?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xoá</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
  <tfoot>
    <tr>
        <td colspan="7">
            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
            <button type="button" id="clear-all" class="btn btn-default">Bỏ chọn tất cả</button>
            <a href="index.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> Thêm mới</a>
        </td>
    </tr>
  </tfoot>
</table>
</form>
