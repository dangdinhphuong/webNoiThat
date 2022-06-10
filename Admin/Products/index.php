<?php
require "../../core/global.php";
require "../../service/products.php";
//--------------------------------//

// check_login();
extract($_REQUEST);

// from create category
if (exist_param("create")) {
    $VIEW_NAME = "../Categories/create.php";
}
// submit from create category
else if (exist_param("store")) {
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);

        try {
            loai_insert($TENLSP);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }
    }
    $VIEW_NAME = "../Categories/create.php";
}
// edit from category
else if (exist_param("edit")) {
    $item = loai_select_by_id($MALSP);
    extract($item);
    $VIEW_NAME = "../Categories/edit.php";
    // dd($loai_hang);
}

// submit from update category
else if (exist_param("update")) {
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {
        $item = loai_select_by_id($MALSP);
        if ($item) { // kiểm tra xem laoi sản phẩm có tồn tại
            try {
                loai_update($MALSP, $TENLSP);
                $MESSAGE = "Thêm mới thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
        }
    }
    header('location: ?list');
}

// xóa loại san phẩm
else if (exist_param("delete")) {
    $item = loai_select_by_id($MALSP);
    if ($item) { // kiểm tra xem laoi sản phẩm có tồn tại
        try {
            loai_delete($MALSP);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
        }
    }
    header('location: ?list');
} 

else {
    $san_pham = Products_select_all();
//     dd($san_pham[0]['GIANHAP']);
    $VIEW_NAME = "../Products/list.php";
}

require "../layout/main.php";
