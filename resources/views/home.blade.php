@extends('Front.layouts.app')
@section('content')
    <main id="app">
        <section class="hero" style="background-image: url({{ asset('assets/front/images/img-header.png') }});">
            <div class="search-fliter">
                <form action="{{ route('advertisements.index') }}" method="get" class="w-100 d-block text-center">
                    <div class="main-search-fliter">
                        <div class="inputs-searh-fliter">
                            <div class="input-form">
                                <input type="text" placeholder="ابحث عن عقار" class="form-control" name="name">
                            </div>
                            <div class="input-form arrow-select">
                                <select class="form-select form-control " name="type">
                                    <option value="للايجار">للايجار</option>
                                    <option value="للبيع">للبيع</option>
                                </select>
                            </div>
                            <div class="input-form arrow-select">
                                <select class="form-select form-control " name="cayegory_id">
                                    <option selected disabled> اسم القسم </option>
                                    @foreach ($categories as $category)
                                        <option value=" {{ $category->id }} "> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="btn-search">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                    <div class="popular-search">
                        <h2> كلمات البحث الشائعة : </h2>
                        <ul>
                            <li><a href=""> للايجار </a></li>
                            <li><a href=""> للبيع </a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </section>

        <!-- aboutus-index -->
        <section class="aboutus-index mr-section">
            <div class="main-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="text-aboutus-index aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="600">
                            <div class="title-start">
                                <h2>ماذا تعرف عن عقارات السعودية </h2>
                            </div>

                            <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                                تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع
                                على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم
                                الموقع.
                                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور
                                مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى
                                يتحدث عنه التصميم فيظهر بشكل لا يليق.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-aboutus-index aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear"
                            data-aos-duration="600">
                            <img src="{{ asset('assets/front/images/img-about.png') }}" alt="">
                            <img src="{{ asset('assets/front/images/img-about2.png') }}" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--end aboutus-index -->

        <!-- categories-index -->
        <section class="categories-index mr-section">
            <div class="main-container">
                <div class="title-start">
                    <h2>الاقسام </h2>
                </div>
                <div class="owl-carousel owl-theme maincarousel" id="slider-categories">
                    @forelse ($categories as $category)
                        <div class="item">
                            <a href="#">
                                <div class="sub-categories-index">
                                    <div class="img-categories-index">
                                        <img src="{{ $category->image }}" alt="">
                                    </div>
                                    <h2>{{ $category->name }}</h2>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="col-12" style="text-align: center;font-size:25px">لايوجد بيانات </p>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- end categories-index -->
        <section class="product-index mr-section">
            <div class="main-container">
                <div class="title-center">
                    <h2>العقارات الموصى بها في السعودية </h2>
                </div>
                <div class="owl-carousel owl-theme maincarousel mt-5" id="slider-product">
                    @forelse ($advertisements as $advertisement)
                        <div class="item">
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
                </div>
            </div>
        </section>

        <!-- faq-index -->
        <section class="faq-index mr-section">
            <div class="main-container">
                <div class="title-center">
                    <h2>الاسئلة الشائعة</h2>
                </div>
                <div class="main-faq-index mt-10">
                    <div class="sub-asked-questions">
                        <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .. </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="puls-que"></div>
                    </div>
                    <div class="sub-asked-questions">
                        <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .. </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="puls-que"></div>
                    </div>
                    <div class="sub-asked-questions">
                        <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .. </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="puls-que"></div>
                    </div>
                    <div class="sub-asked-questions">
                        <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .. </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="puls-que"></div>
                    </div>
                    <div class="sub-asked-questions">
                        <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .. </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="puls-que"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end faq-index -->

    </main>
@endsection
