
@extends('site.layouts.master')

@section('page_content')
   <!-- start the wrap-header section -->
    <section class="wrap-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ابحث عن منازل يسهل الوصول إليها<br> للإيجار والتمليك</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="form">
                        <div class="key">
                            <i class='bx bx-search'></i>
                            <input type="text" placeholder="أدخل كلمة البحث هنا">
                        </div> 
                        <div class="location">
                            <i class='bx bx-location-plus'></i>
                            <select>
                                <option>الشيخ زايد</option>
                                <option>التجمع الخامس</option>
                                <option>مدينتي</option>
                                <option>6 أكتوبر</option>
                            </select>
                        </div>
                        <div class="select">
                            <i class='bx bx-category'></i>
                            <select>
                                <option>فلل</option>
                                <option>قصور</option>
                                <option>منازل</option>
                                <option>مكاتب</option>
                                <option>محلات</option>
                            </select>
                        </div>
                        <!-- <div class="date">
                            <span>موعد الوصول</span>
                            <input type="date">
                        </div>
                        <div class="date">
                            <span>موعد المغادرة</span>
                            <input type="date">
                        </div> -->
                        <!-- <div class="bed">
                            <i class='bx bx-bed' ></i>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div> -->
                        <div class="person">
                            <i class='bx bx-male'></i>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <button type="submit">ابحث</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end the wrap-header section -->

    <!-- start the explore section -->
    <section class="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>أكتشف الأماكن الجديدة</h2>
                    <p>اكتشف معنا أفضل الأماكن الجديدة المتميزة
                    والرائعة والتي لديها العديد من المزايا</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/exterior-01-488x326.jpg" alt="item">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>للبيع</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/exterior-04-488x326.jpg" alt="exterior">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>ايجار</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/exterior-05-488x326.jpg" alt="exterior">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>ايجار</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/p-19.jpg" alt="exterior-01-488x326">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>ايجار</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/p-24.jpg" alt="exterior">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>للبيع</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="img/p-4.jpg" alt="exterior-01-488x326">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    <span>ايجار</span>
                                    <a href="listing-details.html">فيلا بالتجمع الخامس</a>
                                </div>
                                <h4>5000$</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        3 غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        3 حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        1200 m2
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    التجمع الخامس - كمبوند المنتزه
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button><a href="listing.html">أكتشف المزيد</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- end the explore section -->

    <!-- start the find section -->
    <section class="find">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>أسكن في أفضل الأماكن</h2>
                    <p>ابحث عن الاماكن التي تريد السكن فيها بكل أريحية وسهولة وأنت في مكانك</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-1.png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">التجمع الخامس</a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-2.png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">الشيخ زايد</a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-3.png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">مدينة 6 أكتوبر </a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-4.png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">التجمع الأول</a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-5.png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">مدينتي</a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="img/locations/c-4 (1).png" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html">التجمع الخامس</a>
                                <span>3 عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button><a href="listing.html">أكتشف المزيد</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- end the find section -->
    
    <!-- start the services section -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>خدماتنا المميزة</h2>
                    <p>نقدم لكم مجموعة من الخدمات المتميزة التي نمتلكها</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <div class="icon">
                            <h4>01</h4>
                        </div>
                        <div class="text">
                            <h3>سيارات بسائق خاص</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Placeat a nobis, itaque porro aperiam repellat?</p>
                            <a href="#">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <div class="icon">
                            <h4>02</h4>
                        </div>
                        <div class="text">
                            <h3>حجز الفنادق</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Placeat a nobis, itaque porro aperiam repellat?</p>
                            <a href="#">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <div class="icon">
                            <h4>03</h4>
                        </div>
                        <div class="text">
                            <h3>طائرات خاصة</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Placeat a nobis, itaque porro aperiam repellat?</p>
                            <a href="#">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <div class="icon">
                            <h4>04</h4>
                        </div>
                        <div class="text">
                            <h3>استقبال من المطار</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Placeat a nobis, itaque porro aperiam repellat?</p>
                            <a href="#">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button><a href="services.html">أكتشف المزيد</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- end the services section -->

    <!-- start the review section -->
    <section class="review">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>أراء عملاؤنا</h2>
                    <p>بعض أراء عملاؤنا التي تسعدنا ويسعدنا العمل معهم</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="rev-box">
                        <div class="rev-img">
                            <img src="img/users/user-3.jpg" alt="user">
                        </div>
                        <div class="rev-text">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere
                            </p>
                            <h4>mohamed elrafey</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rev-box">
                        <div class="rev-img">
                            <img src="img/users/user-3.jpg" alt="user">
                        </div>
                        <div class="rev-text">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere
                            </p>
                            <h4>mohamed elrafey</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rev-box">
                        <div class="rev-img">
                            <img src="img/users/user-3.jpg" alt="user">
                        </div>
                        <div class="rev-text">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, facere
                            </p>
                            <h4>mohamed elrafey</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end the review section -->

    <!-- start the package section -->
    <section class="package">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>الباقات</h2>
                    <p>يمكنكم الان اختيار الباقة المناسبة لكم والاشتراك فيها </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="package-box">
                        <div class="top first">
                            <h3> <sup>$</sup> 200</h3>
                            <h4>الباقة الأساسية</h4>
                        </div>
                        <ul>
                            <li>ايجار لمدة سنة</li>
                            <li>تقسيط المبلغ</li>
                            <li>دعم طول المدة</li>
                            <li>تقسيط المبلغ </li>
                        </ul>
                        <button><a href="#">اختيار الباقة</a></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="package-box">
                        <div class="top second">
                            <h3> <sup>$</sup> 250</h3>
                            <h4>الباقة الذهبية</h4>
                        </div>
                        <ul>
                            <li>ايجار لمدة سنة</li>
                            <li>تقسيط المبلغ</li>
                            <li>دعم طول المدة</li>
                            <li>تقسيط المبلغ </li>
                        </ul>
                        <button><a href="#">اختيار الباقة</a></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="package-box">
                        <div class="top third">
                            <h3> <sup>$</sup> 350</h3>
                            <h4>الباقة المميزة</h4>
                        </div>
                        <ul>
                            <li>ايجار لمدة سنة</li>
                            <li>تقسيط المبلغ</li>
                            <li>دعم طول المدة</li>
                            <li>تقسيط المبلغ </li>
                        </ul>
                        <button><a href="#">اختيار الباقة</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end the package section -->

    

@endsection