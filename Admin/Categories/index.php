<?php
require "../../core/global.php";
require "../../service/category.php";
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
            // lưu hình ảnh vào forder storage
            $up_hinh = save_file("anh", "$IMAGE_DIR/category/");
            loai_insert($TENLSP,$up_hinh);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }
    }
    // $VIEW_NAME = "../Categories/create.php";
   header("location:$ADMIN_URL/Categories");
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
    $loai_hang = loai_select_all();

    $VIEW_NAME = "../Categories/list.php";
    // dd($loai_hang);
}

require "../layout/main.php";
