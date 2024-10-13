<ul class="cung-loai">
<?php 
$hh_cung_loai=hang_hoa_select_by_loai($ma_loai);
foreach($hh_cung_loai as $hh){?>
    <section class="cardd"> 
         <section class="imgbox">
             <a href="chi-tiet.php?ma_hh=<?=$hh['ma_hh']?>">
                 <div class="card-thumb"><img src="<?= $UPLOAD_URL?>products/<?= $hh['hinh']?>"  alt=""></div>
             </a>
         </section>
         <section class="details">
         <div class="card-name"><?= $hh['ten_hh']?></div>
             <section class="card-price"><?= $hh['don_gia']?></section>
             <section class="bottom">
             <div class="amount">Số lượng: </div>
             <form action="" method="POST">
                 <input type="hidden" name="product_id" value="<?$ma_hh ?>">
                 <input type="hidden" name="action" value="add">
                 <a type="submit">
                    <i class="fa-solid fa-cart-plus"></i>
                 </>
             </form>
             </section>
                 <button class="cart"><a href="chi-tiet.php?ma_hh=<?= $hh['ma_hh']?>">View</a></button>
         </section>
     </section>       
    <?php
}?>
</ul>
   
