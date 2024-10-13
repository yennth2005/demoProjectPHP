<div class="card">
    <div class="card-header"> <i class="fa-solid fa-bars"></i>   DANH MỤC</div>
    <div class="list-group">
        <?php
        foreach($dsloai as $loai){
            extract($loai);
            $link="../hang-hoa/liet-ke.php?ma_loai=".$loai['ma_loai'];
            echo "<a href='$link' class='list-group-item'> <i class='fa-solid fa-mobile-screen'></i>$loai[ten_loai]</a>";
            }?>
    </div>
    <div class="card-footer">
        <form action="../hang-hoa/liet-ke.php">
            <input name="kyw" placeholder="Từ khoá tìm kiếm" class="form-control">
        </form>
    </div>
</div>