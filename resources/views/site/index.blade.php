
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
                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ Storage::url('projects/'.$project->image) }}" alt="item">
                        </div>
                        <div class="text-box">
                            <div class="top">
                                <div class="name">
                                    @if ($project->type == 1 )
                                    <span>للبيع</span>
                                    @else
                                    <span> للايجار </span>
                                    @endif
                                    <a href="listing-details.html"> {{ $project->name }} </a>
                                </div>
                                <h4> {{ $project->price }} $</h4>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class='bx bx-bed'></i>
                                        {{ $project->rooms }} غرفة نوم
                                    </li>
                                    <li>
                                        <i class='bx bx-bath'></i>
                                        {{ $project->bathrooms }} حمام
                                    </li>
                                    <li>
                                        <i class='bx bx-home-alt-2'></i>
                                        {{ $project->total_area }}
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    {{ $project->address }}
                                </li>
                                <button><a href="listing-details.html">view</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                
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
                @foreach ($areas as $area)
                     <div class="col-lg-4 col-md-4">
                    <div class="find-box">
                        <div class="find-img">
                            <img src="{{ Storage::url('areas/'.$area->image) }}" alt="c-1">
                        </div>
                        <div class="find-text">
                            <div class="find-text-left">
                                <a href="listing.html"> {{ $area->name }} </a>
                                <span> {{ $area->projects_count }} عقارات</span>
                            </div>
                            <a href="listing.html"><i class='bx bx-chevrons-left'></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                @php
                    $i = 1;
                @endphp
                @foreach ($services as $service)
                    <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <div class="icon">
                            <h4>0{{ $i++ }}</h4>
                        </div>
                        <div class="text">
                            <h3> {{ $service->name }} </h3>
                            <p> {{ $service->subtitle }} </p>
                            <a href="#">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
                @endforeach


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
                @foreach ($reviews as $review)
                   <div class="col-lg-4 col-md-6">
                    <div class="rev-box">
                        <div class="rev-img">
                            <img src="{{ Storage::url('reviews/'.$review->image) }}" alt="user">
                        </div>
                        <div class="rev-text">
                            @for ($i = 0; $i < $review->rate ; $i++)
                                <i class='bx bxs-star'></i>
                            @endfor

                            <p>
                                {{ $review->comment }}
                            </p>
                            <h4>{{ $review->name }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

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