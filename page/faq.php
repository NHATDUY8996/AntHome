<style type="text/css">
    @media (max-width: 767px) {
        .banner {
            padding: 90px 0 !important;
        }

        .store__list {
            display: flex;
            overflow-x: scroll;
        }

        .store__item {
            padding-left: 5px;
            padding-right: 5px;
        }

        .store__img {
            height: 300px;
        }

        .disnone {
            display: none;
        }
    }

    @media (min-width: 768px) and (max-width: 10123px) {
        .store__img {
            height: 217px !important;
        }
    }

    .banner {
        background-image: url(./img/background/contact_bg.webp);
        padding: 120px 0;
        background-position: center;
        background-size: cover;
    }

    .banner h1 {
        font-weight: 600;
        font-size: 40px;
        text-transform: uppercase;
    }

    .p6 {
        padding-top: 40px;
    }

    .faq h4 {
        margin-bottom: 12px;
        font-size: 18px;
        font-weight: 600;
    }

    .faq__link {
        margin-bottom: 10px;

    }

    .faq__link button {
        width: 100%;
        text-align: left;
        padding: 10px 20px;
        background-color: var(--color-primary5);
        border: none;
        outline: none;
    }

    .faq__link button:hover,
    .faq__link button:active {
        text-decoration: underline;
    }

    .faqtext {
        border: 1px solid var(--color-border);
        padding: 10px 20px;
    }

    .hoverleft {
        display: none;
        opacity: 0;
        visibility: hidden;
        transition: 1s ease;
    }

    .faqlist li:hover {
        font-weight: 600;
    }

    .faqlist li:hover a {
        transition: 1s ease;

    }

    .faqlist li:hover .hoverleft {
        display: block;
        opacity: 1;
        visibility: visible;
        transition: 1s ease;
    }
</style>

<!-- main -->

<!-- banner -->
<div class="banner row m0">
    <h1 class="title-head cwhite text-center">FAQ</h1>
</div>
<!-- banner -->

<div class="faq row m0">
    <div class="p6">
        <div class="col-lg-3 disnone">
            <div class="cttitle">
                <h4>Danh mục</h4>
            </div>
            <ul class="faqlist">
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Trang chủ</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Giới thiệu</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Sản phẩm</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Deal hot</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Thương hiệu nổi
                        bật</a> </li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Tin tức</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">Liên hệ</a></li>
                <li><a href="" class="me-3 hoverleft "><i class="bi bi-dash-lg"></i></a><a href="">FAQ</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="cttitle">
                <h4>Thanh toán và vận chuyển</h4>
            </div>
            <div class="faq-content">
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext" aria-controls="faqtext"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Khi nào thì đơn hàng của tôi được chuyển đi?</button>
                    <div class="collapse faqtext" id="faqtext">
                        <p>Với đơn hàng của Quý khách, sau 24h kể từ khi đặt hàng (không tính ngày thứ 7, chủ nhật
                            và các ngày lễ), Ant Home sẽ liên hệ để xác nhận và gửi sản phẩm đến Quý khách</p>
                    </div>
                </div>
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext1" aria-controls="faqtext1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Tôi có phải thanh toán thêm thuế hay phí gì không?
                    </button>
                    <div class="collapse faqtext" id="faqtext1">
                        <p>Hiện tại mức giá của tất cả sản phẩm của Ant Home đều đã bao gồm thuế giá trị gia tăng.
                            <br>
                            Với những đơn hàng có giá trị trên 700,000VND, Quý khách sẽ được miễn phí vận chuyển
                            <br>
                            Với những đơn hàng có giá trị dưới 700,000VND,Quý khách vui lòng thanh toán thêm
                            30,000VND chi phí vận chuyển
                        </p>
                    </div>
                </div>
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext2" aria-controls="faqtext2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Tôi muốn lấy hóa đơn VAT thì phải làm thế nào?</button>
                    <div class="collapse faqtext" id="faqtext2">
                        <p>"Quý khách vui lòng cung cấp đầy đủ các thông tin dưới đây cho Ant Home khi nhận được
                            điện thoại xác nhận đơn hàng của bộ phận Telesale: <br>
                            1. Tên KH/Tên Đơn vị <br>
                            2. Địa chỉ <br>
                            3. Mã Số Thuế <br>
                            4. Email nhận hóa đơn điện tử <br>
                            Hóa đơn điện tử sẽ được Ant Home gửi tới email đăng ký của Quý khách ngay sau khi sản
                            phẩm được thanh toán"</p>
                    </div>
                </div>
            </div>
            <div class="cttitle">
                <h4>Đơn hàng và những thông tin liên quan</h4>
            </div>
            <div class="faq-content">
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext3" aria-controls="faqtext3"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Khi nào thì đơn hàng của tôi được chuyển đi?</button>
                    <div class="collapse faqtext" id="faqtext3">
                        <p>Tôi cần phải thay đổi một vài thứ liên quan đến đơn hàng, tôi phải làm thế nào?</p>
                    </div>
                </div>
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext4" aria-controls="faqtext4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Khi nào thì đơn hàng của tôi được chuyển đi?</button>
                    <div class="collapse faqtext" id="faqtext4">
                        <p>Quý khách vui lòng liên hệ Hotline 0123 456 789 hoặc inbox fanpage Ant Home để được hỗ trợ
                            nhanh nhất các thông tin về đơn hàng</p>
                    </div>
                </div>
                <div class="faq__link">
                    <button type="button" data-toggle="collapse" data-target="#faqtext5" aria-controls="faqtext5"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Khi nào thì đơn hàng của tôi được chuyển đi?</button>
                    <div class="collapse faqtext" id="faqtext5">
                        <p>Với đơn hàng của Quý khách, sau 24h kể từ khi đặt hàng (không tính ngày thứ 7, chủ nhật
                            và các ngày lễ), Ant Home sẽ liên hệ để xác nhận và gửi sản phẩm đến Quý khách</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./public/js/script.js"></script>