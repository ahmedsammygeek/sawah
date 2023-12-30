
@extends('site.layouts.master')

@section('page_content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
        $i = 1;
        @endphp
        @foreach ($project->images as $project_image)
        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
            <img src="{{ Storage::url('projects/'.$project_image->image) }}" class="d-block w-100" alt="item">
        </div>
        @php
        $i++;
        @endphp
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <i class='bx bx-chevrons-left' aria-hidden="true"></i>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <i class='bx bx-chevrons-right' aria-hidden="true"></i>
    </button>
</div>
<section class="item-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="item-details-box">
                    @if ($project->type == 1 )
                    <span>للبيع</span>
                    @else
                    <span> للايجار </span>
                    @endif
                    <h3>{{ $project->name }}</h3>
                    <li class="location">
                        <i class='bx bx-location-plus'></i>
                        {{ $project->address }}
                    </li>
                    <h4> {{ $project->price }} $</h4>
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
                </div>
                <div class="features">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                التفاصيل & المميزات
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <span>جراج</span>
                                        <span>{{ $project->garage }}</span>
                                    </li>
                                    <li>
                                        <span>المساحة الكلية</span>
                                        <span> {{ $project->total_area }} </span>
                                    </li>
                                    <li>
                                        <span>بدروم</span>
                                        <span> {{ $project->basement }} </span>
                                    </li>
                                    <li>
                                        <span>حمام سباحة</span>
                                        <span> {{ $project->swimming_pool }} </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                             وصف العقار
                         </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ $project->content }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="features">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            فيديو معاينة العقار
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($project->youtube_link)
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/{{ Youtube::parseVidFromURL($project->youtube_link) }}?si=7t-Mhfi2P33BA0kT" title="YouTube video player"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                                    
                                </iframe>
                                @else
                                لا يوجد فديو
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                معرض صور العقار
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @foreach ($project->images as $project_image)
                                   <div class="gallery-item">
                                    <img src="{{ Storage::url('projects/'.$project_image->image) }}" alt="gallery-item">
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                كتابة تقييمك للعقار
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form>
                                            <input type="text" placeholder="اسمك">
                                            <input type="text" placeholder="البريد الالكتروني">
                                            <textarea placeholder="كتابة تقييمك للعقار والخدمة وأي ملاحظات"></textarea>
                                            <button>ارسال</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="rate-title">تقييمك</span>
                                        <div class="rate">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                توافر العقار
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <span class="note">يجب ادخال تاريخ الوصول والمغادرة لمعرفة اذا ما كان العقار سيكون متوفر أم لا</span>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>تاريخ الوصول</label>
                                        <input type="date">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>تاريخ المغادرة</label>
                                        <input type="date">
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="show-available">عرض التوافر</button>
                                    </div>
                                </div> 
                                <div class="available-message">
                                    <button class="close"><i class='bx bx-window-close'></i></button>
                                    <span>نعم هذا العقار سيكون متوفر في تلك الفترة</span>
                                    <a href="#">احجز الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @livewire('site.projects.project-send-message'  , ['project' => $project ] )
                <h3 class="good-title">عقارات مميزة</h3>
                <div class="good-offers">
                    <div class="img">
                        <img src="img/p-4.jpg" alt="item">
                    </div>
                    <div class="details">
                        <a href="listing-details.html">فيلا بمدينتي</a>
                        <span> July 24, 2022 </span>
                        <span> 
                            <i class='bx bx-location-plus'></i>
                            3599 Huntz Lane View 
                        </span>
                    </div>
                </div>
                <div class="good-offers">
                    <div class="img">
                        <img src="img/p-20.jpg" alt="item">
                    </div>
                    <div class="details">
                        <a href="listing-details.html">ِشقة بكمبوند التجمع الاول</a>
                        <span> July 24, 2022 </span>
                        <span> 
                            <i class='bx bx-location-plus'></i>
                            3599 Huntz Lane View 
                        </span>
                    </div>
                </div>
                <div class="good-offers">
                    <div class="img">
                        <img src="img/p-19.jpg" alt="item">
                    </div>
                    <div class="details">
                        <a href="listing-details.html">فيلا التجمع الخامس</a>
                        <span> July 24, 2022 </span>
                        <span> 
                            <i class='bx bx-location-plus'></i>
                            3599 Huntz Lane View 
                        </span>
                    </div>
                </div>
                <div class="good-offers">
                    <div class="img">
                        <img src="img/p-6.jpg" alt="item">
                    </div>
                    <div class="details">
                        <a href="listing-details.html">فيلا التجمع الخامس</a>
                        <span> July 24, 2022 </span>
                        <span> 
                            <i class='bx bx-location-plus'></i>
                            3599 Huntz Lane View 
                        </span>
                    </div>
                </div>
                <div class="good-offers">
                    <div class="img">
                        <img src="img/p-7.jpg" alt="item">
                    </div>
                    <div class="details">
                        <a href="listing-details.html">فيلا التجمع الخامس</a>
                        <span> July 24, 2022 </span>
                        <span> 
                            <i class='bx bx-location-plus'></i>
                            3599 Huntz Lane View 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection