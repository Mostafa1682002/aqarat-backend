@extends('Front.layouts.app')
@section('content')
    <main id="app">
        <section class="hero" style="background-image: url({{ asset('assets/front/images/img-header.png') }});">
            <div class="search-fliter">
                <form action="" class="w-100 d-block text-center">
                    <div class="main-search-fliter">
                        <div class="inputs-searh-fliter">
                            <div class="input-form">
                                <input type="text" placeholder="ابحث عن عقار" class="form-control" name="search">
                            </div>
                            <div class="input-form arrow-select">
                                <select class="form-select form-control " name="region">
                                    <option value="المنطقة">المنطقة</option>
                                    <option value="الرياض ">الرياض </option>
                                    <option value="الدمام"> الدمام </option>
                                </select>
                            </div>
                            <div class="input-form arrow-select">
                                <select class="form-select form-control " name="rooms">
                                    <option value="الغرف">الغرف</option>
                                    <option value="1 ">1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-search">
                            <button><i class="bi bi-search"></i></button>
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
                    <div class="item">
                        <a href="">
                            <div class="sub-categories-index">
                                <div class="img-categories-index">
                                    <img src="{{ asset('assets/front/images/ca1.png') }}" alt="">
                                </div>
                                <h2> منازل</h2>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="sub-categories-index">
                                <div class="img-categories-index">
                                    <img src="{{ asset('assets/front/images/ca1.png') }}" alt="">
                                </div>
                                <h2> منازل</h2>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="sub-categories-index">
                                <div class="img-categories-index">
                                    <img src="{{ asset('assets/front/images/ca1.png') }}" alt="">
                                </div>
                                <h2> منازل</h2>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="sub-categories-index">
                                <div class="img-categories-index">
                                    <img src="{{ asset('assets/front/images/ca1.png') }}" alt="">
                                </div>
                                <h2> منازل</h2>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="sub-categories-index">
                                <div class="img-categories-index">
                                    <img src="{{ asset('assets/front/images/ca1.png') }}" alt="">
                                </div>
                                <h2> منازل</h2>
                            </div>
                        </a>
                    </div>
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
                    <div class="item">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="{{ asset('assets/front/images/p1.jpg') }}" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="{{ asset('assets/front/images/toilet.png') }}" alt="">
                                        </li>
                                        <li>2<img src="{{ asset('assets/front/images/couch.png') }}" alt="">
                                        </li>
                                        <li>3<img src="{{ asset('assets/front/images/single-bed.png') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="{{ asset('assets/front/images/p1.jpg') }}" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="{{ asset('assets/front/images/toilet.png') }}" alt="">
                                        </li>
                                        <li>2<img src="{{ asset('assets/front/images/couch.png') }}" alt="">
                                        </li>
                                        <li>3<img src="{{ asset('assets/front/images/single-bed.png') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="{{ asset('assets/front/images/p1.jpg') }}" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="{{ asset('assets/front/images/toilet.png') }}" alt="">
                                        </li>
                                        <li>2<img src="{{ asset('assets/front/images/couch.png') }}" alt="">
                                        </li>
                                        <li>3<img src="{{ asset('assets/front/images/single-bed.png') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="product-details.html">
                            <div class="sub-product-index">
                                <div class="img-product-index">
                                    <img src="{{ asset('assets/front/images/p1.jpg') }}" alt="">
                                </div>
                                <div class="text-product-index">
                                    <h2>عمارة مجددة بالكامل للبيع </h2>
                                    <h3> <i class="bi bi-geo-alt"></i> الطائف , السعوديه </h3>
                                    <div class="price-product"> 500000 ريال <span class="old-price">480000
                                            ريال</span></div>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                        مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص </p>
                                    <ul>
                                        <li>3<img src="{{ asset('assets/front/images/toilet.png') }}" alt="">
                                        </li>
                                        <li>2<img src="{{ asset('assets/front/images/couch.png') }}" alt="">
                                        </li>
                                        <li>3<img src="{{ asset('assets/front/images/single-bed.png') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
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
