<div class="banner">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $count = 0;
                foreach ($dac_biet_list as $db) {
                    echo '<li data-bs-target="#myCarousel" data-bs-slide-to="' . $count . '" ' . ($count == 0 ? 'class="active"' : '') . '></li>';
                    $count++;
                }
            ?>
        </ol>
    <div class="carousel-inner">
        <?php
            $count = 0;
                foreach ($dac_biet_list as $db) {
                    extract($db);
                    echo '<div class="carousel-item ' . ($count == 0 ? 'active' : '') . '">';
                    echo '<img src="'.$UPLOAD_URL.'products/' . $hinh . '" height="500px" alt="Los Angeles" class="d-block w-100">';
                    echo '<div class="carousel-caption" style="color:black; font-weight:bold">';
                    echo '<h3>' . $don_gia . '</h3>';
                    echo '<p>' . $ten_hh . '</p>';
                    echo '</div>';
                    echo '</div>';
                    $count++;
                }
            ?>
            </div>
    </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
                
        </div>
            <?php foreach($items_all as $item){
                extract($item);
            ?>
            <section class="cardd"> 
                <section class="imgbox">
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>">
                        <div class="card-thumb"><img src="<?= $UPLOAD_URL?>products/<?=$hinh ?>"  alt=""></div>
                    </a>
                </section>
                <section class="details">
                    <div class="card-name"><?= $ten_hh?></div>
                    <section class="card-price"><?= $don_gia?></section>
                    <section class="bottom">
                        <div class="amount">Số lượng: </div>
                        <form action="" method="POST">
                            <input type="hidden" name="product_id" value="<?=$ma_hh ?>">
                            <input type="hidden" name="loai_id" value="<?=$ma_loai ?>">
                            <input type="hidden" name="action" value="add">
                            <a type="submit">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </form>
                    </section>
                    <button class="cart"><a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>">View</a></button>   
                    </section>
                </section>           
            <?php }?>        