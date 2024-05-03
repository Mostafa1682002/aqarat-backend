@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span>العقارات</span>
    </div>
@endsection
@section('content')
    <main id="app">

        <!-- start product-details  -->
        <section class="product-details mr-section">
            <div class="main-container">
                <div class="images-product-details">
                    <div class="owl-carousel owl-theme maincarousel mt-5" id="slider-img">
                        <div class="item">
                            <div class="sub-img-product-details">
                                <img src="{{ $advertisement->image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-product-details">
                            <h2>{{ $advertisement->name }}</h2>
                            <div class="price-product-details">{{ $advertisement->price }}ريال سعودي</div>
                            <ul class="tags-product-details">
                                <li>{{ $advertisement->type }}</li>
                            </ul>

                            <div class="details-list">
                                <ul>
                                    <li> عدد الادوار: <span> {{ $advertisement->number_floors }} </span></li>
                                    <li> نوع العقار : <span> {{ $advertisement->category->name }} </span></li>
                                    <li> عدد المطابخ : <span> {{ $advertisement->number_kitchens }} </span></li>
                                    <li> عدد الصالات : <span> {{ $advertisement->number_halls }} </span></li>
                                    <li> عدد الغرف : <span> {{ $advertisement->number_rooms }} </span></li>
                                    {{-- <li> الفئة : <span>أسرة </span></li> --}}
                                    <li> مصعد : <span> {{ $advertisement->elevator->elevator() }} </span></li>
                                    <li> مفروش : <span> {{ $advertisement->furnished->furnished() }} </span></li>
                                </ul>
                            </div>

                            <h2> تفاصيل العقار </h2>
                            <div class="text-details">
                                <p>{{ $advertisement->description }}</p>
                            </div>



                            <h2 class="mb-3"> الموقع </h2>
                            <div id="map" style="height:400px;"></div>
                            <div class="address-details">
                                <h2 class="mb-2"> العنوان المفصل </h2>
                                <p>{{ $advertisement->address }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="user-owner">
                            <div class="sub-user-owne">
                                <div class="img-owner">
                                    <img src="{{ $advertisement->user->image }}" alt="">
                                </div>
                                <div class="text-owner">
                                    <h2>{{ $advertisement->user->name }} </h2>
                                    <p> تاريخ النشر : {{ date('Y/m/d', strtotime($advertisement->created_at)) }}</p>
                                </div>
                            </div>
                            <ul>
                                <li> <a href="https://wa.me/{{ $advertisement->phone }}" class="user-whatsapp"> تواصل عبر
                                        الواتس اب</a></li>
                                <li> <a href="/chatify/{{ $advertisement->user->id }}" class="user-chat"> راسل صاحب العقار
                                    </a></li>
                                <li> <a href="{{ route('advertisements.index') }}?user_id={{ $advertisement->user->id }}"
                                        class="user-profile"> جميع إعلانات البائع </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

@push('js')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiyY&libraries=places&callback=initAutocomplete&language=ar"
        async defer></script>
    <script src="{{ asset('assets/front/js/map.js') }}"></script>
    <!-- end only page  -->
@endpush
