@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span> البروفايل </span>
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
                                <li><a href="{{ route('profile.index') }}" class="active"> تعديل البيانات <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <li><a href="{{ route('profile.passowrd.index') }}"> تعديل كلمة المرور <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <li><a href="{{ route('profile.advertisements') }}"> اعلاناتي <i
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
                                <h2>تعديل البيانات </h2>
                            </div>
                            <form action="{{ route('profile.update', $profile->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <label for=""> الاسم كاملا </label>
                                            <input type="text" name="name" value="{{ $profile->name }}" required
                                                placeholder="sara" class="form-control">
                                            @error('name')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <label for="">البريد الالكتروني </label>
                                            <input type="email" value="{{ $profile->email }}" name="email" required
                                                placeholder="sara@gmail" class="form-control">
                                            @error('email')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <label for="">رقم الجوال</label>
                                            <input type="text" name="phone" value="{{ $profile->phone }}" required
                                                placeholder="02250161100" class="form-control">
                                            @error('phone')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <label for=""> الصوره الشخصية </label>
                                            <div class="input-upload">
                                                <input type="file" id="ulpload-1" name="image">
                                                <label for="ulpload-1" class="form-control"> <span> اضافة الصوره الشخصية
                                                    </span> <i class="bi bi-upload"></i> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn-profile">
                                            <button type="submit" class="ctm-btn w-100"> حفظ البيانات </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
