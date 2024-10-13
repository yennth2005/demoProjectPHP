<?php
require "../../dao/thong-ke.php";
require "../../dao/binh-luan.php";
require "../../global.php";
check_login();
extract($_REQUEST);

if (exist_param("chart")) {
    $items = thong_ke_hang_hoa();
    $VIEW_NAME = "chart.php";
} else {
    $items = thong_ke_hang_hoa();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
