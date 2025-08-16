<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";

include "view/header.php";
include "global.php";
$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
if(isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];   // ✅ sửa lại $_GET
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";   // ✅ nên tách riêng, bạn đang include nhầm gioithieu.php
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>