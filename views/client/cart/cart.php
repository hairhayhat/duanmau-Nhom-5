<?php include '../views/client/layout/header.php' ?>
<body class="theme-color2 light ltr">
    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="cart.html" class="active">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shopping Cart</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
     <form action="?act=update-cart" method="post">            
                <div class="col-12">
                   
                    <div class="count-down">
                        <h5>Your cart will be expired in <span class="count-timer theme-color" id="timer"></span>
                            minutes !</h5>
                        <button type="button" onclick="location.href = 'checkout.html';"
                            class="btn btn-solid-default btn-sm fw-bold">Check Out</button>
                    </div>
                </div>

                <div class="col-sm-12 table-responsive mt-4">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Ảnh sản phẩm</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Màu</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Hành động</th>
                                <th scope="col">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($carts as $cart): ?>
                            <tr>
                                <td>
                                    <a href="product-left-sidebar.html">
                                        <img src="./images/product/<?= $cart['product_image'] ?>" class=" blur-up lazyload"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="product-left-sidebar.html"><?= $cart['product_name'] ?></a>
                                    
                                </td>
                                <td>
                                    <h2><?= $cart['product_sale_price'] ?>.000 VNĐ</h2>
                                </td>
                                <td>
                                    <h2><?= $cart['variant_color_name'] ?></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity[<?= $cart['cart_id'] ?>]" class="form-control input-number"  value="<?= $cart['quantity'] ?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="?act=delete-cart&&cart_id=<?= $cart['cart_id'] ?>">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                                <td>
                                    <h2 class="td-color"><?= $cart['product_sale_price'] * $cart['quantity'] ?>.000 VNĐ</h2>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="javascript:void(0)"
                                    class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                            <div class="col-5">
                                        <button type="submit" name="update_cart"  class="btn btn-solid-default rounded btn">Cập nhật</button>
                                    </div>
                        </form>   
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="index.html" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout.html" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Tổng tiền cần thanh toán</h3>
                                            <h6>Tổng tiền<span><?= $cart['product_sale_price'] * $cart['quantity'] ?>.000đ</span></h6>
                                          
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout.html">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
</body>
<?php include '../views/client/layout/footer.php' ?>