<?php
require_once '../../dao/hang-hoa.php';
$hh_array = hang_hoa_select_top10();
foreach ($hh_array as $item) {
    extract($item);
    ?>
    <section class="cardd">
        <section class="imgbox">
            <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                <div class="card-thumb"><img src="<?= $UPLOAD_URL ?>products/<?= $hinh ?>" alt=""></div>

            </a>
        </section>
        <section class="details">
            <div class="card-name"><?= $ten_hh ?></div>
            <section class="card-price"><?= $don_gia ?></section>
            <section class="bottom">
                <div class="amount">Số lượng: </div>
                <form action="" method="POST">
                    <input type="hidden" name="product_id" value="<? $ma_hh ?>">
                    <input type="hidden" name="action" value="add">
                    <a type="submit">
                        <i class="fa-solid fa-cart-plus"></i>
                    </a>
                </form>
            </section>
            <button class="cart"><a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh ?>">View</a></button>


        </section>
    </section>
    <?php
}
?>