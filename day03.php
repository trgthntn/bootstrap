<!-- header -->
<?php include("header.php"); ?>
<!-- End of header -->

<body>

<!-- nav bar -->
<?php include("nav.php"); ?>
<!-- End of nav bar -->

<!-- 4 icon cards -->
<div class="container py-3">
    <div class="row my-3">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-primary w-100 my-3">
                <div class="card-header"><img class="lazyload" alt="" src="https://dulichviet.com.vn/images/main/i-ads-1.svg" style="height: 40px;"></div>
                <div class="card-body">
                    <h5 class="card-title">Khách sạn</h5>
                    <p class="card-text">Khách sạn tốt nhất tại các địa điểm du lịch nổi tiếng.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-danger w-100 my-3">
                <div class="card-header"><img class="lazyload" alt="" src="https://dulichviet.com.vn/images/main/i-ads-2.svg" style="height: 40px;"></div>
                <div class="card-body">
                    <h5 class="card-title">Thuê xe</h5>
                    <p class="card-text">Dịch vụ thuê xe giá tốt từ các nhà xe uy tín và chu đáo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-warning w-100 my-3">
                <div class="card-header"><img class="lazyload" alt="" src="https://dulichviet.com.vn/images/main/i-ads-3.svg" style="height: 40px;"></div>
                <div class="card-body">
                    <h5 class="card-title">Visa</h5>
                    <p class="card-text">Dịch vụ Visa nhanh, rẻ. Visa trọn gói, thủ tục đơn giản</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-dark w-100 my-3">
                <div class="card-header"><img class="lazyload" alt="" src="https://dulichviet.com.vn/images/main/i-ads-4.svg" style="height: 40px;"></div>
                <div class="card-body">
                    <h5 class="card-title">Vé máy bay</h5>
                    <p class="card-text">Vé máy bay giá rẻ nhất, nhiều khuyến mãi hấp dẫn</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 my-3" style="border-bottom: 1px dashed lightgray;"></div>
</div>
<!-- End of 4 icon cards -->



<!-- Carousel -->
<div class="container">
    <div id="banner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\d03\banner-01.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index:100">
                        <h5>BANNER DU LỊCH SỐ 1</h5>
                        <p>Copyright © 2019 DU LỊCH VIỆT. Ghi rõ nguồn "dulichviet.com.vn" khi sử dụng thông tin từ website này</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="img\d03\banner-02.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index:100">
                        <h5>BANNER DU LỊCH SỐ 2</h5>
                        <p>Copyright © 2019 DU LỊCH VIỆT. Ghi rõ nguồn "dulichviet.com.vn" khi sử dụng thông tin từ website này</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="img\d03\banner-03.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index:100">
                        <h5>BANNER DU LỊCH SỐ 3</h5>
                        <p>Copyright © 2019 DU LỊCH VIỆT. Ghi rõ nguồn "dulichviet.com.vn" khi sử dụng thông tin từ website này</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="img\d03\banner-04.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index:100">
                        <h5>BANNER DU LỊCH SỐ 4</h5>
                        <p>Copyright © 2019 DU LỊCH VIỆT. Ghi rõ nguồn "dulichviet.com.vn" khi sử dụng thông tin từ website này</p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>
<!-- End of Carousel -->

<!-- Tour cards -->
<div class="container">
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 my-2">
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-01.jpg" class="card-img img-fluid rounded-top" alt="Tour 01">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ TP.HCM</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Hà Nội - Yên Tử - Hạ Long - Tràng An - Sapa - Fansipan từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 6 ngày 5 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 25/05/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 1</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">8.399.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">8.599.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 12:34:22</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-02.jpg" class="img-fluid img-fluid rounded-top" alt="Tour 02">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ Hà Nội</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Miền Bắc - Hà Nội - Hà Giang - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 7 ngày 6 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 12/06/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 6</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">9.299.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">9.699.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 26:18:16</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-03.jpg" class="card-img img-fluid rounded-top" alt="Tour 03">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ TP.HCM</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Hà Nội - Yên Tử - Hạ Long - Tràng An - Sapa - Fansipan từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 6 ngày 5 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 25/05/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 1</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">8.399.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">8.599.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 12:34:22</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-04.jpg" class="card-img img-fluid rounded-top" alt="Tour 01">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ TP.HCM</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Hà Nội - Yên Tử - Hạ Long - Tràng An - Sapa - Fansipan từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 6 ngày 5 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 25/05/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 1</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">8.399.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">8.599.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 12:34:22</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-05.jpg" class="img-fluid img-fluid rounded-top" alt="Tour 02">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ Hà Nội</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Miền Bắc - Hà Nội - Hà Giang - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 7 ngày 6 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 12/06/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 6</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">9.299.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">9.699.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 26:18:16</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded-3 my-3">
                <div class="card text-white">
                    <img src="img/d03/tour-06.jpg" class="card-img img-fluid rounded-top" alt="Tour 03">
                    <div class="card-img-overlay p-0">
                        <p class="card-text position-absolute left-0 bottom-0 ps-3 pe-5 py-1 opa-r-dark">Khởi hành từ TP.HCM</p>
                    </div>
                </div>
                <div class="card-body border-1 p-0">
                    <div class="card-header overflow-hidden fadeTourTitle">Du lịch Hà Nội - Yên Tử - Hạ Long - Tràng An - Sapa - Fansipan từ Sài Gòn</div>
                    <div class="row m-1 my-3">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 card-text float-start gap-2">
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">schedule</span>
                                <span class="fst-normal">Lịch trình: 6 ngày 5 đêm</span>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">event</span>
                                <div class="card-text">Khởi hành: 25/05/2021</div>
                            </div>
                            <div class="d-flex flex-row align-items-center align-item-start gap-2 my-1">
                                <span class="material-icons-outlined fs-5 text-secondary">people</span>
                                <div class="card-text">Số chỗ còn nhận: 1</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex flex-xl-column flex-md-row align-self-end">
                            <div class="card-text d-flex flex-row-reverse order-xl-2">
                                <span class="text-danger fw-bold fs-5">8.399.000đ</span>
                            </div>
                            <div class="card-text d-flex flex-row-reverse order-xl-1">
                                <span class="text-decoration-line-through text-muted">8.599.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-row align-items-center align-item-start gap-2">
                        <span class="material-icons-outlined fs-6 text-secondary">timer</span>
                        <small class="text-muted">Thời gian còn lại: 12:34:22</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Tour cards -->

<!-- footer -->
<?php include("footer.php"); ?>
<!-- End of footer -->

</body>
</html>