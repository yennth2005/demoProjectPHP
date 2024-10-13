<h3 class="alert alert-success">Chi tiết bình luận</h3>
<form action="index.php?ma_hh=<?= $ma_hh ?>" method="POST">
    <?php 
        $ten_hh = '';
        foreach ($items as $item) {
            if (empty($ten_hh)) {
                $ten_hh = $item['ten_hh'];
            }
        }
        echo "<h3>HÀNG HOÁ: $ten_hh</h3>";
    ?>
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>NỘI DUNG</th>
                <th>NGÀY BÌNH LUẬN</th>
                <th>NGƯỜI BL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) {
                extract($item); ?>
                <tr>
                    <th><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></th>
                    <td><?= $noi_dung ?></td>
                    <td><?= $ngay_bl ?></td>
                    <td><?= $ma_kh ?></td>
                    <td>
                        <a href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>" class="btn btn-default btn-sm"><i class="fa-solid fa-trash"></i> Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php   
        if (isset($MESSAGE)) {
            echo "<div class='alert alert-success'>".$MESSAGE."</div>";
        }
    ?>
            <tr>
                <td colspan="7">
                    <a href="index.php" class="btn btn-danger">Quay lại</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
