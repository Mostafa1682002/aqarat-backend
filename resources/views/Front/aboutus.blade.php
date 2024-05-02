@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span>من نحن</span>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="aboutus-page mr-section">
            <div class="main-container">
                <div class="text-aboutus-page text-center">
                    <div class="title-center mb-4">
                        <h2>من نحن </h2>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                        يولدها
                        التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                        النص
                        لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                        يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                        ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                        النص
                        العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم
                        فيظهر بشكل لا يليق.
                        هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير
                        منسق،
                        أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>

                </div>
                <div class="aboutus-index mr-section">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="text-aboutus-index aos-init aos-animate" data-aos="fade-left"
                                data-aos-easing="linear" data-aos-duration="600">
                                <div class="title-start">
                                    <h2>ماذا تعرف عن عقارات السعودية </h2>
                                </div>

                                <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                    مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.
                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات
                                    كما
                                    تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي
                                    المواقع
                                    على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                    لتصميم
                                    الموقع.
                                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                                    كاملاً،دور
                                    مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع
                                    الذى
                                    يتحدث عنه التصميم فيظهر بشكل لا يليق.
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="img-aboutus-index aos-init aos-animate" data-aos="fade-right"
                                data-aos-easing="linear" data-aos-duration="600">
                                <img src="{{ asset('assets/front/images/img-about.png') }}" alt="">
                                <img src="{{ asset('assets/front/images/img-about2.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@push('js')
@endpush
