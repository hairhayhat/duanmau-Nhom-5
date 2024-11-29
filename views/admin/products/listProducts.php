<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Products List</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-desi table-product">
                                <table class="table table-1d all-package">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Danh mục</th>
                                            <th>Thương hiệu</th>
                                            <th>Giá</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($list_Products as $product): ?>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)"><?= $product['product_id'] ?></a>
                                                </td>

                                                <td>
                                                    <img src="./images/product/<?= $product['image'] ?>" class="img-fluid"
                                                        alt="" style="width: 100px">
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)"><?= $product['name'] ?></a>
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)"><?= $product['category_id'] ?></a>
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)"><?= $product['brand_id'] ?></a>
                                                </td>


                                                <td class="td-price"><?= $product['price'] ?></td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="far fa-trash-alt theme-color"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-box">
                        <nav class="ms-auto me-auto " aria-label="...">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2 <span
                                            class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>