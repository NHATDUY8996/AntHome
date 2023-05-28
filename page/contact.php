
<style type="test/css">
    @media (max-width: 767px) {
        .banner{
            padding: 90px 0 !important;
        }
        .store__list{
            display: flex;
            overflow-x: scroll;
        }
        .store__item{
            padding-left: 5px;
            padding-right: 5px;
        }
        .store__img{
            height: 300px;
        }
    }
    @media (min-width: 768px) and (max-width: 1023px) {
        .store__img{
            height: 217px !important;
        }
    }
.banner{
    background-image: url(./img/background/contact_bg.webp);
    padding: 120px 0;
    background-position: center;
    background-size: cover    ;
}
.banner h1{
    font-weight: 600;
    font-size: 40px;
    text-transform: uppercase;
}
.p-bottom,
.p-top{
    margin-bottom: 10px;
    font-style: italic;
    color: var(--color-white2);
}
.leave-your-message h3{
    font-size: 29px;
    margin: 0;
    text-transform: uppercase; 
}
.btnsend{
    margin-top: 10px;
    float: right;
    color: var(--color-white);
    background-color: var(--color-primary);
    border: 1px solid var(--color-primary);
}
.btnsend:hover{
    background-color: var(--color-white);
    border: 1px solid var(--color-primary);
    color: var(--color-primary);
}
.contact-list-store p6,
.question .p6{
    padding-top: 40px;
}
.store__list{
    padding-top: 40px;
}
.store__img{
    height: 359px;
}
.store__img img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
}
.store__info h5 {
    font-size: 19px;
    text-transform: uppercase;
    font-weight: 600;
}
</style>

    <!-- main -->
    <!-- banner -->
    <div class="banner row m0">
        <h1 class="title-head cwhite text-center">FAQ</h1>
    </div>
    <!-- banner -->
<!-- form question -->
<div class="question row m0">
    <div class="p6">
        <div class="col-lg-6 col-12 col-sm-6 leave-your-message">
            <p class="p-top">Ant Home</p>
            <h3>Bạn có bất kỳ câu hỏi nào?</h3>
            <p class="p-bottom">Ant Home cam kết cung cấp giải pháp thương mại điện tử với trải nghiệm mua sắm tốt nhất cho người tiêu dùng trong định hình phong cách sống hiện đại và mua sắm nội thất tại Việt Nam. Mọi thông tin liên hệ xin gửi vào form dưới đây hoặc liên hệ chúng tôi theo địa chỉ.</p>
            <div class="contact-box">
                <p><strong>Địa chỉ: </strong>70 Lu Gia, Ward 15, District 11, Ho Chi Minh City</p>
                <p><strong>Điện thoại: </strong><a href="">1900 6750</a></p>
                <p><strong>Email: </strong><a href="" >support@sapo.vn</a></p>
                
            </div>
        </div>
        <div class="col-lg-6 col-12 col-sm-6 leave-your-message">
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group">
                    <label>Họ và tên<span class="required">*</span></label>
                    <input placeholder="Nhập họ và tên" type="text" class="form-control  form-control-lg"  >
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group">
                    <label>Email<span class="required">*</span></label>
                    <input placeholder="Nhập địa chỉ Email" type="email" class="form-control form-control-lg">
                </fieldset>
            </div>
            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group">
                    <label>Điện thoại<span class="required">*</span></label>
                    <input placeholder="Nhập số điện thoại" type="tel" class="number-phone form-control form-control-lg" >
                </fieldset>
            </div>
            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group">
                    <label>Nội dung<span class="required">*</span></label>
                    <textarea placeholder="Nội dung liên hệ"  class="form-control form-control-lg" rows="5" ></textarea>
                </fieldset>
                <fieldset class="form-group">
                    <button type="submit" class="btn btnsend">Gửi tin nhắn</button>
                </fieldset>
            </div>
		</div>
    </div>

</div>
<!-- form question -->
<div class="contact-list-store row m0">
    <div class="p6">
        <div class="store__list">
            <div class="store__item col-lg-3 col-sm-3 col-8">
                <div class="store__img">
                    <img src="./img/contact/contact_store_1.webp" alt="">
                </div>
                <div class="store__info">
                    <h5>Ant Home Tân Phú</h5>
                    <p>175 Lý Thường Kiệt, Phường 6, Quận Tân Phú, TP Hồ Chí Minh</p>
                    <p><a href="tel:0222456789">0222 456 789</a></p>
                    <p><a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></p>
                </div>
            </div>
            <div class="store__item col-lg-3 col-sm-3 col-8">
                <div class="store__img">
                    <img src="./img/contact/contact_store_2.webp" alt="">
                </div>
                <div class="store__info">
                    <h5>ANT HOME ĐÀ NẴNG</h5>
                    <p>175 Lý Thường Kiệt, Phường 6, Quận Tân Phú, TP Hồ Chí Minh</p>
                    <p><a href="tel:0222456789">0222 456 789</a></p>
                    <p><a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></p>
                </div>
            </div>
            <div class="store__item col-lg-3 col-sm-3 col-8">
                <div class="store__img">
                    <img src="./img/contact/contact_store_3.webp" alt="">
                </div>
                <div class="store__info">
                    <h5>ANT HOME NHA TRANG</h5>
                    <p>175 Lý Thường Kiệt, Phường 6, Quận Tân Phú, TP Hồ Chí Minh</p>
                    <p><a href="tel:0222456789">0222 456 789</a></p>
                    <p><a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></p>
                </div>
            </div>
            <div class="store__item col-lg-3 col-sm-3 col-8">
                <div class="store__img">
                    <img src="./img/contact/contact_store_4.webp" alt="">
                </div>
                <div class="store__info">
                    <h5>ANT HOME ĐÀ LẠT</h5>
                    <p>175 Lý Thường Kiệt, Phường 6, Quận Tân Phú, TP Hồ Chí Minh</p>
                    <p><a href="tel:0222456789">0222 456 789</a></p>
                    <p><a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="./public/js/script.js"></script>
