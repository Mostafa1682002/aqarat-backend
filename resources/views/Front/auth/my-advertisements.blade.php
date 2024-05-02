@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span> اعلاناتي </span>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="profile-page mr-section">
            <div class="main-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="links-proflie-page">
                            <div class="details-proflie-page">
                                <div class="img-proflie-page">
                                    <img style="width: 150px;
                                    border-radius: 50%;
                                    padding:2px,
                                    height: 150px;"
                                        src="{{ $profile->image }}" alt="">
                                </div>
                                <h2>{{ $profile->name }} </h2>
                                <p> {{ $profile->email }}</p>
                            </div>
                            <ul>
                                <li><a href="{{ route('profile.index') }}"> تعديل البيانات <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <li><a href="{{ route('profile.passowrd.index') }}"> تعديل كلمة المرور <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <li><a href="{{ route('profile.advertisements') }}" class="active"> اعلاناتي <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <form action="{{ route('logout') }}" method="post" id="logout">
                                    @csrf
                                </form>
                                <li><a href="#"
                                        onclick="event.preventDefault(); document.querySelector('#logout').submit()">تسجيل
                                        الخروج <i class="bi bi-chevron-double-left"></i></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="modify-data">
                            <div class="title-profile">
                                <h2>اعلاناتي</h2>
                                <a href="{{ route('advertisements.create') }}" class="ctm-btn"> اضافه اعلان </a>
                            </div>
                            <div class="row">
                                @forelse ($advertisements as $advertisement)
                                    <div class="col-lg-6">
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
                                                                src="{{ asset('assets/front/images/toilet.png') }}"
                                                                alt="">
                                                        </li>
                                                        <li>{{ $advertisement->number_halls }}<img
                                                                src="{{ asset('assets/front/images/couch.png') }}"
                                                                alt="">
                                                        </li>
                                                        <li>{{ $advertisement->number_rooms }}<img
                                                                src="{{ asset('assets/front/images/single-bed.png') }}"
                                                                alt="">
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
                    </div>


                </div>
            </div>
        </section>
    </main>
@endsection
