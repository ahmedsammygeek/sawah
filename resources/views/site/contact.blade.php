
@extends('site.layouts.master')

@section('page_content')

    <!-- start the banner section  -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>تواصل بنا</h2>
                    <p>يمكنك التواصل معنا في أي وقت لأي استفسار </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end the banner section  -->

    <!-- start the contact section -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>تواصل معنا</h2>
                    <p>يمكنك التواصل معنا في أي وقت علي مدار الأسبوع , نحن في انتظار رسائلكم</p>
                    <ul>
                        <li>
                            <i class='bx bx-location-plus' ></i>
                            <div class="data">
                                <h3>العنوان</h3>
                                <span> {{ $data['settings']->address }} </span>
                            </div>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <div class="data">
                                <h3>البريد الالكتروني</h3>
                                <span> {{ $data['settings']->email }} </span>
                            </div>
                        </li>
                        <li>
                            <i class='bx bx-phone'></i>
                            <div class="data">
                                <h3>الهاتف</h3>
                                <span> {{ $data['settings']->mobile }} </span>
                            </div>
                        </li>
                    </ul>                    
                </div>
                <div class="col-lg-6">
                    @livewire('site.contact-us')
                </div>
            </div>
        </div>
    </section>
    <!-- end the contact section -->
@endsection