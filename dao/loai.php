<?php 
//truy vấn danh sách loại đã nhập
//mới lên trước
function loai_selectAll(){
    $sql="SELECT * FROM loai order by ma_loai asc";
    return pdo_query($sql);
}
function loai_insert($ten_loai){
    $sql="INSERT INTO loai(ten_loai) values (?)";
    pdo_execute($sql,$ten_loai);
}
function loai_delete($ma_loai){
    $sql="DELETE FROM loai WHERE ma_loai=?";
    pdo_execute($sql,$ma_loai);
}
function loai_getinfor($ma_loai){
    $sql="SELECT * FROM loai where ma_loai=?";
    return pdo_query_one($sql,$ma_loai);
}
function loai_update($ma_loai,$ten_loai){
    $sql="UPDATE loai SET ten_loai=? where ma_loai=?";
    pdo_execute($sql,$ten_loai,$ma_loai);
}
?>