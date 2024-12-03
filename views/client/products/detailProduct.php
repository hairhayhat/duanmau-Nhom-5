<?php include '../views/client/layout/header.php' ?>

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
                <h3>Shop đồ điện</h3>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Shop Section start -->
<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-lg-3 col-md-4 mt-lg-5 mt-0">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>

                    <div class="accordion category-name" id="accordionExample">

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        <?php foreach ($brands as $brand): ?>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <a href="index.php?act=detail-brand&brand_id=<?= $brand['brand_id'] ?>"
                                                        class="btn btn-color btn-sm fw-bold"
                                                        style="color: <?= ($brand['brand_id'] == ($detailProduct[0]['brand_id'] ?? null)) ? 'rgb(226, 36, 84)' : 'inherit' ?>;">
                                                        <?= $brand['name'] ?>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        <?php foreach ($categories as $category): ?>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <a href="index.php?act=detail-category&category_id=<?= $category['category_id'] ?>"
                                                        class="btn btn-color btn-sm fw-bold"
                                                        style="color: <?= ($category['category_id'] == ($detailProduct[0]['category_id'] ?? null)) ? 'rgb(226, 36, 84)' : 'inherit' ?>;">
                                                        <?= $category['name'] ?>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12">
                <!-- filter button -->
                <div class="filter-button mb-3">
                    <button class="danger-button danger-center btn btn-sm filter-btn"><i data-feather="align-left"></i>
                        Filter</button>
                </div>
                <!-- filter button -->
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="degree-section">
                                <div class="details-image ratio_asos">
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="./images/product/<?= $detailProduct[0]['product_image'] ?>"
                                                id="zoom_01" data-zoom-image="client/assets/images/fashion/1.jpg"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span class="font-light">120</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="details-image-option black-slide mt-4 rounded">
                                    <?php foreach ($detailGallery as $gallery): ?>
                                        <div>
                                            <img src="./images/gallery/<?= $gallery['gallery_image'] ?>"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="cloth-details-size">
                                <div class="product-count">
                                    <ul>
                                        <li>
                                            <img src="client/assets/images/gif/fire.gif"
                                                class="img-fluid blur-up lazyload" alt="image">
                                            <span class="p-counter">37</span>
                                            <span class="lang">orders in last 24 hours</span>
                                        </li>
                                        <li>
                                            <img src="client/assets/images/gif/person.gif" class="img-fluid user_img"
                                                alt="image">
                                            <span class="p-counter">44</span>
                                            <span class="lang">active view this</span>
                                        </li>
                                    </ul>
                                </div>
                                <form  action="?act=addToCart-byNow&product_id=<?= $detailProduct[0]['product_id'] ?>" method="POST">
                                <div class="details-image-concept">
                                    <h2><?= $detailProduct[0]['product_name'] ?></h2>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color"><?= $detailProduct[0]['brand_name'] ?></span>
                                    <span class="label-text"><?= $detailProduct[0]['category_name'] ?></span>
                                </div>

                                <h3 class="price-detail"><?= $detailProduct[0]['product_sale_price'] ?>.000 Vnd
                                    <del><?= $detailProduct[0]['product_price'] ?>.000 Vnd</del><span>55% off</span>
                                </h3>

                               
                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5 class="product-title product-title-2 d-block">Color :</h5>
                                            <ul class="image-section" style="list-style: none; padding: 0;">
                                                <?php foreach ($detailVariant as $variant): ?>
                                                    <li style="display: inline-block; margin-right: 10px;">
                                                        <input type="hidden" name="variant_id" id="variant_id" value="<?= $variant['variant_id']; ?>">
                                                        <span
                                                            style="display: inline-block; width: 45px; height: 45px; background-color: <?= $variant['variant_color_code']; ?>; border-radius: 10%; border: 1px solid #000;">
                                                        </span>
                                                        <input type="radio" name="variant_color"
                                                            value="<?= $variant['variant_color_id']; ?>"
                                                            style="display:none;">
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title product-title-2 d-block">Quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="number" name="quantity" class="form-control input-number"
                                                    value="1" min="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="product_id"
                                        value="<?= $detailProduct[0]['product_id']; ?>">
                                        

                                    <div class="product-buttons">
                                        <a href="wishlist.html" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Wishlist</span>
                                        </a>
                                        <button type="submit" name="add_to_cart" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add To Cart</span>
                                        </button>
                                    </div>
                                </form>


                                <ul class="product-count shipping-order">
                                    <li>
                                        <img src="client/assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                            alt="image">
                                        <span class="lang">Free shipping for orders above $500 USD</span>
                                    </li>
                                </ul>

                                <div class="mt-2 mt-md-3 border-product">
                                    <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>10</span>
                                        in
                                        stock</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>

                                <div class="border-product">
                                    <h6 class="product-title d-block">share it</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li>
                                                <a href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.google.com/">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="pe-0">
                                                <a href="https://www.google.com/">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="cloth-review">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#desc" type="button">Description</button>
                            <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#speci"
                                type="button">Specifications</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                <div class="part">
                                    <h4 class="inner-title mb-2">Give you a complete account of the system</h4>
                                    <p class="font-light">Nor again is there anyone who loves or pursues or
                                        desires
                                        to
                                        obtain pain of itself, because it is pain, but because occasionally
                                        circumstances occur in which toil and pain can procure him some great
                                        pleasure.
                                        To take a trivial example, which of us ever undertakes laborious
                                        physical
                                        exercise, except to obtain some advantage from it? But who has any right
                                        to
                                        find
                                        fault with a man who chooses to enjoy a pleasure that has no annoying
                                        consequences, or one who avoids a pain that produces no resultant
                                        pleasure.
                                    </p>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-lg-8">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>

                                        <div class="part mt-3">
                                            <h5 class="inner-title mb-2">fabric:</h5>
                                            <p class="font-light">Art silk is manufactured by synthetic fibres
                                                like
                                                rayon. It's light in weight and is soft on the skin for comfort
                                                in
                                                summers.Art silk is manufactured by synthetic fibres like rayon.
                                                It's
                                                light in weight and is soft on the skin for comfort in summers.
                                            </p>
                                            <p class="font-light">Lorem Ipsum is simply dummy text of the
                                                printing
                                                and typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <img src="./images/gallery/<?= $detailGallery[0]['gallery_image'] ?>"
                                            class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>

                                    <div class="col-lg-8 order-lg-2 mt-4">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>
                                        <div class="part mt-3">
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing
                                                elit. Odio repellat numquam perspiciatis eum quis ab, sed dicta
                                                tenetur
                                                fugit culpa, aut distinctio deserunt quisquam ipsam
                                                reprehenderit
                                                iure?
                                                Adipisci, optio enim? Voluptates voluptatum neque id ad commodi
                                                quisquam
                                                dolorem vitae inventore quasi! Officiis facere, iusto tempore
                                                atque
                                                magnam voluptas. Architecto laboriosam deleniti hic veritatis
                                                nesciunt.
                                                Aut officia quasi inventore et. Debitis.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 order-lg-0 mt-4">
                                        <img src="./images/gallery/<?= $detailGallery[1]['gallery_image'] ?>"
                                            class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="speci">
                            <div class="pro mb-4">
                                <p class="font-light">The Model is wearing a white blouse from our stylist's
                                    collection, see the image for a mock-up of what the actual blouse would look
                                    like.it has text written on it in a black cursive language which looks great
                                    on a white color.</p>
                                <div class="table-responsive">
                                    <table class="table table-part">
                                        <tr>
                                            <th>Product Dimensions</th>
                                            <td>15 x 15 x 3 cm; 250 Grams</td>
                                        </tr>
                                        <tr>
                                            <th>Date First Available</th>
                                            <td>5 April 2021</td>
                                        </tr>
                                        <tr>
                                            <th>Manufacturer‏</th>
                                            <td>Aditya Birla Fashion and Retail Limited</td>
                                        </tr>
                                        <tr>
                                            <th>ASIN</th>
                                            <td>B06Y28LCDN</td>
                                        </tr>
                                        <tr>
                                            <th>Item model number</th>
                                            <td>AMKP317G04244</td>
                                        </tr>
                                        <tr>
                                            <th>Department</th>
                                            <td>Men</td>
                                        </tr>
                                        <tr>
                                            <th>Item Weight</th>
                                            <td>250 G</td>
                                        </tr>
                                        <tr>
                                            <th>Item Dimensions LxWxH</th>
                                            <td>15 x 15 x 3 Centimeters</td>
                                        </tr>
                                        <tr>
                                            <th>Net Quantity</th>
                                            <td>1 U</td>
                                        </tr>
                                        <tr>
                                            <th>Included Components‏</th>
                                            <td>1-T-shirt</td>
                                        </tr>
                                        <tr>
                                            <th>Generic Name</th>
                                            <td>T-shirt</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class="ratio_asos section-b-space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                <?php foreach ($productByCate as $product): ?>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="./images/product/<?= $product['image'] ?>"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="./images/product/<?= $product['image'] ?>"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="index.php?act=detail-product&product_id=<?= $product['product_id'] ?>">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content"><?= $product['category_name'] ?></span>
                                        <span class="font-light grid-content"><?= $product['brand_name'] ?></span>

                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0"><?= $product['name'] ?></h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab ducimus eaque
                                                illum, quibusdam reiciendis id ad consectetur quis, animi qui, minus quidem
                                                eveniet! Dolorum magnam numquam, asperiores accusantium architecto placeat
                                                quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color"><?= $product['price'] ?>.000 Vnđ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

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
<?php include '../views/client/layout/footer.php' ?>
