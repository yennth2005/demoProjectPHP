<div class="card">
    <div class="card-header">HÀNG MỚI VỀ</div>
    <div class="list-group">
        <?php
        foreach($new as $loai){
            extract($loai);
            ?>
            <center><a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>"><img src="<?= $UPLOAD_URL?>products/<?=$hinh ?>" width="160px" alt=""></a></center>
            <center><h4><?= $ten_hh?></h4></center>
            <?php
            }?>
            
    </div>
</div>