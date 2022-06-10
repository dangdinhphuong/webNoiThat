<div class="section__content section__content--p30">
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40 w-100">
                <div class="table table-borderless table-data3">
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters
                            </button>
                        </div>
                        <div class="table-data__tool-right">

                            <a href="?create" class="btn btn-success"> <i class="zmdi zmdi-plus"></i>ADD</a>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table  " style=" overflow-x: scroll;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Nhà sản xuất</th>
                        <th scope="col">HSD</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">GIA NHẬP</th>
                        <th scope="col">GÍA BÁN</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach ($san_pham as $item) {

                        extract($item);
                        ?>
                    <tr>
                        <td><?= $MASP ?></td>
                        <td><?= $TENSP ?></td>
                        <td><?= $NSX ?></td>
                        <td><?= $HSD ?></td>
                        <td style="width: 600px;"><img style="width: 600px;" src="../../storage/images/products/<?= $ANH ?>"></td>

                        <td><?= $SOLUONG ?></td>
                        <td><?= $MOTA ?></td>
                        <td><?= $GIANHAP ?></td>
                        <td><?= $GIABAN ?></td>
                        <td class="btn <?php echo $TRANGTHAI == 1 ? "btn-success" : 'btn-danger' ?>">
                            <?php echo $TRANGTHAI == 1 ? "Hoạt động" : 'Ngừng hoạt động' ?></td>
                        <td>
                            <a href="?edit&MASP=<?= $MASP ?>"><i class="fa-solid fa-pen"></i></a>
                            <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="?delete&MASP=<?= $MASP ?>"><i
                                        class="fa-solid fa-trash-can"></i></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>