<?php 
foreach($binh_luan_list as $bl){
    echo "
    <table>
        <tr>
            <th>Nội dung</th>
            <th>Người gửi</th>
            <th>Ngày gửi</th>
        </tr>
        <tr>
            <td>$bl[noi_dung]</td>
            <td>$bl[ma_kh]</td>
            <td>$bl[ngay_bl]</td>
        </tr>
    </table>";
}
if(!isset($_SESSION['user'])){
    echo '<br><br><b class="alert alert-danger"> Đăng nhập để bình luận về sản phẩm này</b>';
}else{
?>
<h3>Bình luận</h3>
<form action="<?= $_SERVER["REQUEST_URI"]?>" method="POST">
    <div class="input-group">
        <span class="input-group-text"><i class="fa-regular fa-comment"></i></span>   
        <input type="text" class="form-control" name="comment">
        <button name="noi_dung" class="btn btn-primary">GỬI</button>
    </div>
</form>
<?php }?>