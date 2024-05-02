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
        <section class="product-fliter mr-section">
            <div class="main-container">
                <div class="fliter-sales-page mt-3">
                    <div class="form-fliter-sales-page">
                        <div class="input-form">
                            <div class="input-form">
                                <input type="text" class="form-control" placeholder="أبحث عن محافظة, مدينة"
                                    name="search">
                            </div>
                        </div>
                        <div class="input-form arrow-select">
                            <select class="form-select form-control " name="">
                                <option value="للايجار">للايجار</option>
                                <option value="لبيع">لبيع</option>
                                <option value="قريباً"> قريباً</option>
                            </select>
                        </div>
                        <div class="input-form arrow-select">
                            <select class="form-select form-control " name="">
                                <option value="موقع العقار">موقع العقار</option>
                                <option value="الرياض"> الرياض</option>
                                <option value="الرياض"> الرياض</option>
                            </select>
                        </div>
                        <div class="input-form arrow-select">
                            <select class="form-select form-control " name="">
                                <option value="اسم القسم "> اسم القسم </option>
                                <option value="منازل"> منازل </option>
                                <option value="شقق"> فلل </option>
                                <option value="شقق"> شقق </option>
                            </select>
                        </div>
                        <div class="input-form">
                            <div class="input-form">
                                <input type="number" class="form-control" placeholder="السعر" name="price">
                            </div>
                        </div>

                    </div>
                    <div class="btn-sales-page">
                        <button class="ctm-btn w-100"> بحث </button>
                    </div>

                </div>

                <div class="row">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('advertisements.show', $advertisement->id) }}">
                                <div class="sub-product-index">
                                    <div class="img-product-index">
                                        <img src="{{ $advertisement->image }}" alt="">
                                    </div>
                                    <div class="text-product-index">
                                        <h2> {{ $advertisement->name }}</h2>
                                        <h3> <i class="bi bi-geo-alt"></i> {{ $advertisement->address }} </h3>
                                        <div class="price-product"> {{ $advertisement->price }} ريال
                                            {{-- <span class="old-price">480000 ريال</span> --}}
                                        </div>
                                        <p>{{ substr($advertisement->description, 0, 120) }} </p>
                                        <ul>
                                            <li>{{ $advertisement->number_kitchens }}<img
                                                    src="{{ asset('assets/front/images/toilet.png') }}" alt="">
                                            </li>
                                            <li>{{ $advertisement->number_halls }}<img
                                                    src="{{ asset('assets/front/images/couch.png') }}" alt="">
                                            </li>
                                            <li>{{ $advertisement->number_rooms }}<img
                                                    src="{{ asset('assets/front/images/single-bed.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="col-12" style="text-align: center;font-size:25px">لايوجد بيانات </p>
                    @endforelse

                    {{-- <div class="col-lg-4 col-md-6">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="images/toilet.png" alt=""> </li>
                                        <li>2<img src="images/couch.png" alt=""> </li>
                                        <li>3<img src="images/single-bed.png" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="images/toilet.png" alt=""> </li>
                                        <li>2<img src="images/couch.png" alt=""> </li>
                                        <li>3<img src="images/single-bed.png" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="images/toilet.png" alt=""> </li>
                                        <li>2<img src="images/couch.png" alt=""> </li>
                                        <li>3<img src="images/single-bed.png" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="images/toilet.png" alt=""> </li>
                                        <li>2<img src="images/couch.png" alt=""> </li>
                                        <li>3<img src="images/single-bed.png" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="images/toilet.png" alt=""> </li>
                                        <li>2<img src="images/couch.png" alt=""> </li>
                                        <li>3<img src="images/single-bed.png" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                </div>

            </div>
        </section>
    </main>
@endsection

@push('js')
@endpush
