<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Thêm mới Sản Phẩm</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Thông tin sản phẩm</h5>
                                </div>
                                <form action="index.php?act=add-product" method="post"
                                    class="theme-form theme-form-2 mega-form">
                                    <!-- Tên sản phẩm và danh mục -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label-title">Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="category" class="form-label-title">Danh mục</label>
                                            <select class="form-select" id="category" name="category">
                                                <option selected>Chọn danh mục</option>
                                                <option value="1">Danh mục 1</option>
                                                <option value="2">Danh mục 2</option>
                                                <option value="3">Danh mục 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Giá sản phẩm và giá khuyến mãi -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="price" class="form-label-title">Giá sản phẩm</label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="Nhập giá sản phẩm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sale_price" class="form-label-title">Giá khuyến mãi</label>
                                            <input type="text" name="sale_price" class="form-control" id="sale_price"
                                                placeholder="Nhập giá khuyến mãi">
                                        </div>
                                    </div>


                                    <!--Sản phẩm biến thể-->
                                    <div class="variant border rounded px-4 py-4">
                                        <!-- Kích thước và màu sắc -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label-title">Kích thước:</label>
                                                <select class="form-select" name="variant_size[]">
                                                    <option value="XS">XS</option>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label-title">Màu:</label>
                                                <select class="form-select" name="variant_color[]">
                                                    <option value="black">Đen</option>
                                                    <option value="red">Đỏ</option>
                                                    <option value="green">Xanh lá</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Giá biến thể, giá khuyến mãi biến thể và số lượng -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="variant_price[]" class="form-label-title">Giá biến
                                                    thể</label>
                                                <input type="text" name="variant_price[]" class="form-control"
                                                    id="variant_price[]" placeholder="Nhập giá sản phẩm">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="variant_sale_price[]" class="form-label-title">Giá khuyến
                                                    mãi
                                                    biến
                                                    thể</label>
                                                <input type="text" name="variant_sale_price[]" class="form-control"
                                                    id="variant_sale_price[]" placeholder="Nhập giá khuyến mãi">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="variant_quantity[]" class="form-label-title">Số
                                                    lượng</label>
                                                <input type="number" name="variant_quantity[]" class="form-control"
                                                    id="variant_quantity[]" placeholder="Nhập số lượng">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mô tả sản phẩm -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label-title">Mô tả</label>
                                        <textarea name="description" class="form-control" id="description" rows="5"
                                            placeholder="Nhập mô tả sản phẩm"></textarea>
                                    </div>

                                    <!-- Hình ảnh-->
                                    <div class="mb-3">
                                        <label class="form-label-title">Ảnh</label>
                                        <div class="col-sm-12">
                                            <input id="image" class="form-control" type="file" name="image">
                                        </div>
                                    </div>


                                    <!-- Nút lưu -->
                                    <div class="row justify-content-start">
                                        <div class="col-md-10">
                                            <button type="submit" name="saveProduct"
                                                class="btn btn-primary">Aplly</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- Footer Start -->
    <div class="container-fluid mt-4">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer End -->
</div>
<?php include '../views/admin/layout/footer.php' ?>