 <!-- start the scroll-top div -->
    <div class="scroll show">
        <i class='bx bx-chevrons-up'></i>
    </div>
    <!-- end the scroll-top div -->


    <!-- start the footer section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('site_assets/img/logo-light.svg') }}" alt="logo">
                    <p> ينكن دائما التواصل معانا للاستفسار عن اى تريده.... </p>
                    <ul>
                        <li>
                            <i class='bx bx-location-plus' ></i>
                            {{ $data['settings']->address }}
                        </li>
                        <li>
                            <i class='bx bxl-whatsapp'></i>
                            {{ $data['settings']->whatsapp }}
                        </li>
                        <li>
                            <i class='bx bx-phone'></i>
                            {{ $data['settings']->mobile }}
                        </li>
                        <li>
                            <i class='bx bxl-gmail'></i>
                            {{ $data['settings']->email }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>خريطة الموقع</h4>
                    <ul>
                        <li><a href="about.html">ماذا عنا</a></li>
                        <li><a href="blog.html">المدونة</a></li>
                        <li><a href="contactus.html">تواصل معنا</a></li>
                        <li><a href="privacy-policy.html">سياسة الموقع</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>خدماتنا</h4>
                    <ul>
                        <li><a href="#">سيارات بسائق خاص</a></li>
                        <li><a href="#">حجز فنادق</a></li>
                        <li><a href="#">طيارات خاصة</a></li>
                        <li><a href="#">استقبال من المطار</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>مشاريعنا</h4>
                    <ul>
                        <li><a href="listing.html">الفلل</a></li>
                        <li><a href="listing.html">القصور</a></li>
                        <li><a href="listing.html">المنازل</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span>جميع الحقوق محفوظة 2024</span>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social">
                            <li><a href="{{ $data['settings']->facebook }}"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="{{ $data['settings']->twitter }}"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="{{ $data['settings']->youtube }}"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="{{ $data['settings']->instagram }}"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="{{ $data['settings']->snapchat }}"><i class='bx bxl-snapchat'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end the footer section -->