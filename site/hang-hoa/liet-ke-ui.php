
        <?php if(isset($_REQUEST['ma_loai'])){?>
            <h3><?= $loai['ten_loai']?></h3>
            <?php foreach($items as $item){
                extract($item);?>
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
                                    <input type="hidden" name="product_id" value="<?$ma_hh ?>">
                                    <input type="hidden" name="action" value="add">
                                    <a type="submit">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </a>
                                </form>
                                </section>
                                    <button class="cart"><a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>">View</a></button>
                            </section>
                        </section>           
                    <?php }}elseif(isset($_REQUEST['kyw'])){?>
                        <h3>KẾT QUẢ TÌM KIẾM</h3>
                    <?php foreach($items as $item){
                        extract($item);
                    ?>
                    <section class="cardd"> 
                            <section class="imgbox">
                                <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>">
                                    <div class="card-thumb"><img src="../../uploaded/<?= $hinh?>"  alt=""></div>
                                </a>
                            </section>
                            <section class="details">
                            <div class="card-name"><?= $ten_hh?></div>
                                <section class="card-price"><?= $don_gia?></section>
                                <section class="bottom">
                                <div class="amount">Số lượng: </div>
                                <form action="" method="POST">
                                    <input type="hidden" name="product_id" value="<?$ma_hh ?>">
                                    <input type="hidden" name="action" value="add">
                                    <a type="submit">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </a>
                                </form>
                                </section>
                                    <button class="cart"><a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh?>">View</a></button>

                                
                            </section>
                        </section>           
                        <?php }}?>
                    