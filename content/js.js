//logo
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext('2d');
ctx.font = "bold 88px  Brush Script MT"; 
ctx.fillStyle = "#000080"; 
ctx.fillText("Hai Yen's", 70, 100); 
ctx.font = "italic 78px Brush Script MT"; 
ctx.fillText("Shop", 182, 170); 

function tru() {
    var amountInput = document.getElementById('amount');
    var amount = parseInt(amountInput.value);
    if (amount > 0) {
        amountInput.value = amount - 1;
    }
}
            
function cong() {
    var amountInput = document.getElementById('amount');
    var amount = parseInt(amountInput.value);
    amountInput.value = amount + 1;
}

const menuItems = document.querySelectorAll('header ul .right .nav-item .nav link');
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        // Xóa class 'clicked' khỏi tất cả các item
        menuItems.forEach(item => item.classList.remove('clicked'));

        // Thêm class 'clicked' cho item vừa click
        item.classList.add('clicked');
    });
});
//validate đăng nhập
function dangNhap() {
    var ma_kh = document.getElementById("ma_kh").value;
    var mat_khau = document.getElementById("mat_khau").value;

    if (ma_kh.trim() === "") {
        document.getElementById("loi_ma_kh").innerHTML = "Tên đăng nhập không được để trống";
        return false;
    } else if (ma_kh.length < 3 || ma_kh.length > 30) {
        document.getElementById("loi_ma_kh").innerHTML = "Tên đăng nhập phải từ 3 đến 30 ký tự";
        return false;
    } else {
        document.getElementById("loi_ma_kh").innerHTML = "";
    }

    if (mat_khau.trim() === "") {
        document.getElementById("loi_mat_khau").innerHTML = "Mật khẩu không được để trống";
        return false;
    } else if (mat_khau.length < 6 || mat_khau.length > 10) {
        document.getElementById("loi_mat_khau").innerHTML = "Mật khẩu phải từ 6 đến 10 ký tự";
        return false;
    } else {
        document.getElementById("loi_mat_khau").innerHTML = "";
    }

    return true;
}
//validate đăng ký
function dangKy(){
    var ma_kh=document.myform.ma_kh.value;
    var ho_ten=document.myform.ho_ten.value;
    var email=document.myform.email.value;
    var mat_khau=document.myform.mat_khau.value;
    var mat_khau2=document.myform.mat_khau2.value;
    var kt=false;
    
    if(ma_kh.length==0){
        document.getElementById('loi_ma_kh').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(ma_kh.length <3 || ma_kh.length>30){
        document.getElementById('loi_ma_kh').innerHTML="Tên đăng nhập có độ dài từ 3 -30 ký tự";
        kt=false;
    }else{
        document.getElementById('loi_ma_kh').innerHTML="";
        kt=true;
    }
    if(ho_ten.length==0){
        document.getElementById('loi_ho_ten').innerHTML="Không được bỏ trống";
        kt=false;
    }else{
        document.getElementById('loi_ho_ten').innerHTML="";
        kt=true;
    }
    if(email.length==""){
        document.getElementById('loi_email').innerHTML="Không được bỏ trống";
        kt=false;
    // }else {
    //     document.getElementById('loi_email').innerHTML="";
    //     kt=true;
    }
    if(mat_khau.length==0){
        document.getElementById('loi_mat_khau').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(mat_khau.length <6 || mat_khau.length>10){
        document.getElementById('loi_mat_khau').innerHTML="Mật khẩu có độ từ từ 6-10 ký tự";
        kt=false;
    }else{
        document.getElementById('loi_mat_khau').innerHTML="";
        
    }
    if(mat_khau2.length==0){
        document.getElementById('loi_mat_khau2').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(mat_khau!= mat_khau2){
        document.getElementById('loi_mat_khau2').innerHTML="Mật khẩu không trùng khớp";
        kt=false;
    }else{
        document.getElementById('loi_mat_khau2').innerHTML="";
     }
    
    return kt;
}
function capNhatTaiKhoan(){
    var ma_kh=document.myform.ma_kh.value;
    var ho_ten=document.myform.ho_ten.value;
    var email=document.myform.email.value;
    var anh =document.myform.up_hinh.value;
    var kt=false;
    if(ma_kh.length==0){
        document.getElementById('loi_ma_kh').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(ma_kh.length<3 || ma_kh.length>30){
        document.getElementById('loi_ma_kh').innerHTML="Tên đăng nhập có độ dài từ 3 - 30 ký tự";
        kt=false;
    }else if(!/[A-Za-z]/.test(ma_kh) || !/[1-9]/.text(ma_kh)){
        document.getElementById('loi_ma_kh').innerHTML="Tên đăng nhập bao gồm chữ và số"
    }else{
        document.getElementById('loi_ma_kh').innerHTML = "";
    }
    if(ho_ten.length==0){
        document.getElementById('loi_ho_ten').innerHTML="Không được bỏ trống";
        kt=false;
    }else{
        document.getElementById('loi_ho_ten').innerHTML="";
    }
    if(email.length==0){
        document.getElementById('loi_email').innerHTML="Không được bỏ trống";
        kt=false;
    }else{
        document.getElementById('loi_email').innerHTML="";
        
    }
    return kt;
}
function doiMk(){
    var mat_khau=document.myform.mat_khau.value;
    var mat_khau2=document.myform.mat_khau2.value;
    var mat_khau3=document.myform.mat_khau3.value;
    var kt=false;
    if(mat_khau.length==0){
        document.getElementById('loi_mat_khau').innerHTML="Không được bỏ trống";
        kt=false;
    }else{
        document.getElementById('loi_mat_khau').innerHTML="";
        
    }
    if(mat_khau2.length==0){
        document.getElementById('loi_mat_khau2').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(mat_khau2.length <6 || mat_khau2.length>10){
        document.getElementById('loi_mat_khau2').innerHTML="Mật khẩu có độ từ từ 6-10 ký tự";
        kt=false;
    }else{
        document.getElementById('loi_mat_khau2').innerHTML="";
    }
    if(mat_khau2.length==0){
        document.getElementById('loi_mat_khau3').innerHTML="Không được bỏ trống";
        kt=false;
    }else if(mat_khau2!= mat_khau3){
        document.getElementById('loi_mat_khau3').innerHTML="Mật khẩu không trùng khớp";
        kt=false;
    }else{
        document.getElementById('loi_mat_khau3').innerHTML="";
    }
}