<?php
Require_once 'Connect.php';
function category_select_by_id($MALSP){
    $sql = "SELECT * FROM loaisp WHERE MALSP =?";
    return pdo_query_one($sql, $MALSP);
}

function category_delete($id){
    $sql = "DELETE FROM loaisp  WHERE MALSP=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
function Products_select_all(){
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($TENLSP,$anh){
    $sql = "INSERT INTO loaisp (TENLSP,anh) VALUES(?,?)";
    pdo_execute($sql, $TENLSP,$anh);
}

/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($MALSP){

    $sql = "SELECT * FROM loaisp WHERE MALSP=?";
    return pdo_query_one($sql, $MALSP);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($id, $name){
    $sql = "UPDATE loaisp SET TENLSP=?WHERE MALSP=?";
    pdo_execute($sql, $name, $id);


}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($id){
    $sql = "DELETE FROM loaisp WHERE MALSP=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }

}