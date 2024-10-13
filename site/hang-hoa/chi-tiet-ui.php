
    <div class="form">
        <div class="f-left">
            <img src="<?= $UPLOAD_URL?>products/<?=$hinh ?>" width="555px" height="444px" alt="">
        </div>
            <div class="f-right">
                <div class="pro-name"><?php echo $ten_hh?></div> <br>
                <div class="pro-price"><?php echo $don_gia;?>đ</div>
                
                <table>
                <tr>
                    <td style="font-size: 18px">Màu sắc: </td>
                    <td><div class="pro-color"></div></td>
                </tr>
                <tr>
                    <td style="font-size: 18px">Số lượng</td>
                    <td><button class="btn btn-outline-info" onclick="tru()"><i class="fa-solid fa-minus"></i></button></td>
                    <td><input class="btn btn-outline-info" id="amount" style="width:55px; text-align:center;" type="text" value="0"></td>
                    <td><button class="btn btn-outline-info" onclick="cong()"><i class="fa-solid fa-plus"></i></button></td>
                    <!-- <td><div class="pro-amount" name="amount"><?php ?></div></td> -->
                </tr>
            </table>
            <div class="buy">
                <button class="btn btn-outline-success"> <i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                <input type="submit" class="btn btn-danger" value="Mua ngay">
            </div>
            </div>
    </div>
    <div class="description">
            <h2>Mô tả chi tiết</h2>
            <h5>Tên sản phẩm: <?php echo $ten_hh?></h5>
            <h5>Giá tiền: <?php echo $don_gia?></h5>
            <h5>Thể loại: <?= $loai['ten_loai'] ?></h5>
            <div class="desc"><?= $mo_ta?></div>
    </div>  
    <br><br><h4>Nội dung bình luận</h4>
    <?php require '../hang-hoa/binh-luan.php'?>
    <hr>
    <div class="danh-muc-block">
        <h4 class="header" style="width: 400px; padding:3px; font-size: 28px">SẢN PHẨM LIÊN QUAN</h4>
        <?php require '../hang-hoa/hang-cung-loai.php'?>
    </div>



