<div class="section__content section__content--p30">
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
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
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
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

                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hành động</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php
                        foreach ($loai_hang as $item) {
                            extract($item);
                        ?>
                            <tr>
                                <td><?= $MALSP ?></td>
                                <td><?= $TENLSP ?></td>
                                <td>
                                    <a href="?edit&MALSP=<?= $MALSP ?>"><i class="fa-solid fa-pen"></i></a>
                                    <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="?delete&MALSP=<?= $MALSP ?>"><i class="fa-solid fa-trash-can"></i></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>