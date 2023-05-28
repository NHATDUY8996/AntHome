<style type="test/css">
    .banner img {
        max-width: 100%;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .cttitle h4 {
        margin: 0 0 10px;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--color-black);
        font-size: 16px;
        line-height: 1.5em;
        letter-spacing: .12em;
    }

    .mainleft a:hover {
        color: var(--color-primary);
    }

    .mainleft__blog-img {
        max-width: 80px;
        margin: 0 10px 0 0;
    }

    .mainleft__blog-img img {
        width: 100%;
    }

    .mainleft__blog-title {
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 500;
        color: var(--color-primary4);
    }

    .blog-item-author {
        margin-top: 20px;
    }

    .mainright-img img {
        width: 100%;
        max-width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .blog-item-author span {
        display: block;
        font-size: 14px;
        font-weight: 400;
        font-style: italic;
        color: #8b8b8b;
    }

    .blog-item-author h3 {
        font-weight: 600;
        text-transform: uppercase;
        color: var(--color-primary4);
        font-size: 25px;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    .blog-item-author h3 a:hover {
        color: var(--color-primary);
    }

    .blog-item-author .a-viewmore {
        margin-top: 10px;
        color: var(--color-primary4);
        font-size: 15px;
        font-weight: 400;
        font-style: italic;
        display: inline-block;
        border-bottom: 1px solid var(--color-primary4);
    }

    .mainright-item {
        margin-bottom: 20px;
    }

    .mainright {
        margin-bottom: 10px;
    }
    .pagination li a{
        font-size: 18px;
        font-weight: 400;
        border: none !important;
        color: var(--color-black);
        margin: 10px;
        background-color: #f3f5f7;
        border-radius: 50% !important;
    }
    .pagination .active{
        background-color: var(--color-primary) !important;
        color: var(--color-white) !important;
    }
@media (max-width: 767px) {
    .main .p6{
        display: flex;
        flex-direction: column-reverse;
    }
}
</style>


<!-- main -->
<section class="bread-crumb row m0">
    <div class="p6">
        <ul class="breadcrumb">
            <li class="home">
                <a href="/" title="Trang chủ">
                    <span class="">Trang chủ</span>
                </a>
            </li>
            <li>
                <span class="cprimary">Tất cả tin tức</sapn>
            </li>
        </ul>
    </div>
</section>

<!-- banner -->
<div class="banner row m0">
    <div class="p6">
        <div class="col-lg-12 col-md-12">
            <a href="">
                <img src="./img/banner/blog_banner.webp" alt="">

            </a>
        </div>
    </div>
</div>
<!-- banner -->

<div class="main row m0">
    <div class="p6">
        <div class="mainleft col-lg-4 col-sm-4 col-12">
            <div class="mainleft__catelogy">
                <div class="cttitle">
                    <h4>Danh mục</h4>
                </div>
                <ul>
                    <li class=""><a href="">Trang chủ</a></li>
                    <li class=""><a href="">Giới thiệu</a></li>
                    <li class="d-flex  justify-content-between"><a href="">Sản phẩm</a><i class="bi bi-plus-lg"></i>
                    </li>
                    <li class=""><a href="">Deal hot</a></li>
                    <li class=""><a href="">Thương hiệu nổi bật</a> </li>
                    <li class=""><a href="">Tin tức</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
            <div class="mainleft__blog">
                <div class="cttitle">
                    <h4>Tin nổi bật</h4>
                </div>
                <ul>
                    <li class="">
                        <a href="" class="mainleft__blog-img"><img src="./img/blog/bloglist-1-963x600-10.webp" alt="">
                        </a>
                        <a href="" class="mainleft__blog-title">NHÀ PHỐ HAI MÁI GIÚP GIA CHỦ KHÔNG CẦN ĐIỀU HÒA</a>
                    </li>
                    <li class="">
                        <a href="" class="mainleft__blog-img"><img src="./img/blog/black-and-white-1 (1).webp" alt="">
                        </a>
                        <a href="" class="mainleft__blog-title">NGÔI NHÀ NGOÀI ĐEN, TRONG TRẮNG</a>
                    </li>
                    <li class="">
                        <a href="" class="mainleft__blog-img"><img src="./img/blog/bloglist-1-963x600-1-1 (1).webp"
                                alt=""> </a>
                        <a href="" class="mainleft__blog-title">
                            NHỮNG NGÔI NHÀ VIỆT LỌT TOP 50 CÔNG TRÌNH ĐẸP NHẤT</a>
                    </li>
                    <li class="">
                        <a href="" class="mainleft__blog-img"><img src="./img/blog/bloglist-1-963x600-10.webp" alt="">
                        </a>
                        <a href="" class="mainleft__blog-title">
                            CĂN HỘ 'GỌN NHƯ PHÒNG PHẪU THUẬT' CỦA NỮ Y SĨ</a>
                    </li>
                    <li class="">
                        <a href="" class="mainleft__blog-img"><img src="./img/blog/bloglist-1-963x600-1-1 (1).webp"
                                alt=""> </a>
                        <a href="" class="mainleft__blog-title">
                            CĂN NHÀ BÊ TÔNG THÔ MỘC, TỐI GIẢN CỦA GIA ĐÌNH HÀ NỘI</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mainright col-lg-8 col-12 col-sm-8">
            <div class="mainright-item col-12 col-sm-12 col-lg-12">
                <a href="" class="mainright-img">
                    <img src="./img/blog/bloglist-1-963x600-1.webp" alt="">
                </a>
                <div class="blog-item-author">
                    <span>Monday, July, 2020 - Kiến Vàng</span>
                    <h3>
                        <a href="">Nhà phố hai mái giúp gia chủ không cần điều hòa</a>
                    </h3>
                    <p>
                        Căn nhà trên mảnh đất 68 m2 ở quận 9 của một gia đình ba người. Để ngôi nhà thông gió và ít
                        cần sử dụng điều hòa, kiến trúc sư sử dụng hệ thống hai mái tôn.
                        Bề ngoài công trình. Ảnh:&nbsp;Thiết Vũ.
                        Chất liệu tôn cách nhiệt có đặc điểm là nhẹ. Bên cạnh đó, khoảng đệm giữa hai lớp mái cho
                        gió đi qua, thổi đi khối khí nóng mặt trời chiếu lên lớp m...
                    </p>
                    <a href="" class="a-viewmore">Xem thêm</a>
                </div>
            </div>
            <div class="mainright-item col-12 col-sm-12 col-lg-12">
                <a href="" class="mainright-img">
                    <img src="./img/blog/black-and-white-1.webp" alt="">
                </a>
                <div class="blog-item-author">
                    <span>Monday, July, 2020 - Kiến Vàng</span>
                    <h3>
                        <a href="">Nhà phố hai mái giúp gia chủ không cần điều hòa</a>
                    </h3>
                    <p>
                        Căn nhà trên mảnh đất 68 m2 ở quận 9 của một gia đình ba người. Để ngôi nhà thông gió và ít
                        cần sử dụng điều hòa, kiến trúc sư sử dụng hệ thống hai mái tôn.
                        Bề ngoài công trình. Ảnh:&nbsp;Thiết Vũ.
                        Chất liệu tôn cách nhiệt có đặc điểm là nhẹ. Bên cạnh đó, khoảng đệm giữa hai lớp mái cho
                        gió đi qua, thổi đi khối khí nóng mặt trời chiếu lên lớp m...
                    </p>
                    <a href="" class="a-viewmore">Xem thêm</a>
                </div>
            </div>
            <div class="mainright-item col-12 col-sm-12 col-lg-12">
                <a href="" class="mainright-img">
                    <img src="./img/blog/bloglist-1-963x600-1-1.webp" alt="">
                </a>
                <div class="blog-item-author">
                    <span>Monday, July, 2020 - Kiến Vàng</span>
                    <h3>
                        <a href="">Nhà phố hai mái giúp gia chủ không cần điều hòa</a>
                    </h3>
                    <p>
                        Căn nhà trên mảnh đất 68 m2 ở quận 9 của một gia đình ba người. Để ngôi nhà thông gió và ít
                        cần sử dụng điều hòa, kiến trúc sư sử dụng hệ thống hai mái tôn.
                        Bề ngoài công trình. Ảnh:&nbsp;Thiết Vũ.
                        Chất liệu tôn cách nhiệt có đặc điểm là nhẹ. Bên cạnh đó, khoảng đệm giữa hai lớp mái cho
                        gió đi qua, thổi đi khối khí nóng mặt trời chiếu lên lớp m...
                    </p>
                    <a href="" class="a-viewmore">Xem thêm</a>
                </div>
            </div>
            <div class="page text-center">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-arrow-left"></i></a>
                    </li>
                    <li class=" page-item disabled"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="">2</a></li>
                    <li class="page-item"><a class="page-link" href="">3</a></li>
                    <li class="page-item"><a class="page-link" href="">4</a></li>
                    <li class="page-item"><a class="page-link" href=""><i class="bi bi-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="./public/js/script.js"></script>