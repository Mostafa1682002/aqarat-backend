@extends('Admin.layouts.master')
@section('title')
    عرض اعلان
@endsection
@section('css')
    <style>
        ul {
            list-style-type: none;
        }

        .tags-product-details {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
        }

        .tags-product-details li {
            height: 40px;
            padding: 7px 25px;
            border: 1px solid var(--color-Primary1);
            border-radius: 5px;
        }

        .details-list ul {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .details-list ul li {
            font-size: 20px;
            display: flex;
            gap: 25px;
            width: calc(100% / 3 - 20px);
        }

        .details-list ul li span {
            color: var(--color-Primary4);
            font-family: "font_bold";
        }

        .text-details {
            margin: 20px 0;
        }

        .address-details h2 {
            font-size: 24px;
            margin: 20px 0;
            font-family: "font_medium";
        }

        .user-owner {
            border-radius: 10px;
            background-color: #f8f8f8;
            padding: 20px;
            border: 1px solid #c9c9c9b0;
        }

        .sub-user-owne {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .img-owner {
            width: 100px;
            height: 100px;
        }

        .img-owner img {
            object-fit: cover;
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        .text-owner {
            width: calc(100% - 110px);
        }

        .text-owner h2 {
            font-family: "font_medium";
        }

        .user-owner ul {
            margin-top: 50px;
        }

        .user-owner ul li a {
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            color: var(--color-white);
            justify-content: center;

            border-radius: 5px;
            background-color: var(--color-Primary1);
            margin: 10px 0;
        }

        .user-whatsapp {
            background-color: #0dc143 !important;
        }

        .user-chat {
            background-color: var(--color-black) !important;
        }

        .form-contactus {
            margin: 60px auto;
            width: 60%;
        }

        .user-whatsapp,
        .user-profile {
            color: #fff !important;
        }

        .user-profile {
            background-color: #6b734e !important;
        }
    </style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">عرض اعلان</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="default-color">الرئيسيه</a></li>
                    <li class="breadcrumb-item">قائمة الاعلانات</li>
                    <li class="breadcrumb-item active"> عرض اعلان</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection




@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="text-product-details">
                                <h2>{{ $advertisement->name }}</h2>
                                <div class="price-product-details">{{ $advertisement->price }} ريال سعودي </div>
                                <div class="details-list">
                                    <ul>
                                        <li> الهاتف: <span> {{ $advertisement->phone }} </span></li>
                                        <li> عدد الادوار: <span> {{ $advertisement->number_floors }} </span></li>
                                        <li> نوع العقار : <span> {{ $advertisement->name }} </span></li>
                                        <li> عدد المطابخ : <span> {{ $advertisement->number_kitchens }} </span></li>
                                        <li> عدد الصالات : <span> {{ $advertisement->number_halls }} </span></li>
                                        <li> الفئة : <span>{{ $advertisement->type }}</span></li>
                                        <li> مصعد : <span> {{ $advertisement->elevator->elevator() }} </span></li>
                                        <li> مفروش : <span> {{ $advertisement->elevator->furnished() }} </span></li>
                                        <li> الحالة : <span> {{ $advertisement->status->status() }} </span></li>
                                    </ul>
                                </div>

                                <h2> تفاصيل العقار </h2>
                                <div class="text-details">
                                    <p>{{ $advertisement->description }} </p>
                                </div>

                                <div class="address-details">
                                    <h2 class="mb-2"> العنوان المفصل </h2>
                                    <p>{{ $advertisement->address }} </p>
                                </div>
                                <div class="image-adv">
                                    <h2 class="mb-2"> الصور </h2>
                                    <img src="{{ $advertisement->image }}" alt="IMAGE">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="user-owner">
                                <div class="sub-user-owne">
                                    <div class="img-owner">
                                        {{-- <img src="images/users.png" alt=""> --}}
                                        <img src="{{ $advertisement->user->image }}" alt="">
                                    </div>
                                    <div class="text-owner">
                                        <h2>{{ $advertisement->user->name }} </h2>
                                        <p> تاريخ النشر : {{ date('Y/m/d', $advertisement->created_at) }}</p>
                                    </div>
                                </div>
                                <ul>
                                    <li> <a href="https://wa.me/{{ $advertisement->phone }}" class="user-whatsapp"> تواصل
                                            عبر الواتس اب</a></li>
                                    {{-- <li> <a href="" class="user-profile"> جميع
                                            إعلانات البائع </a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- row closed -->
@endsection
@section('js')
@endsection
