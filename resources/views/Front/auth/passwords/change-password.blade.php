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
                                <li><a href="{{ route('profile.index') }}"> تعديل البيانات <i
                                            class="bi bi-chevron-double-left"></i></a></li>
                                <li><a href="{{ route('profile.passowrd.index') }}" class="active"> تعديل كلمة المرور <i
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
                                <h2>تعديل كلمة المرور</h2>
                            </div>

                            <form action="{{ route('profile.passowrd.change', 10) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <label for="">كلمة المرور القديمة</label>
                                            <div class="show-password"><i class="bi bi-eye-slash"></i></div>
                                            <input type="password" placeholder="*****************" class="form-control"
                                                name="old_password">
                                            @error('old_password')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <label for="">كلمة المرور الجديدة</label>
                                            <div class="show-password"><i class="bi bi-eye-slash"></i></div>
                                            <input type="password" placeholder="*****************" class="form-control"
                                                name="password">
                                            @error('password')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <label for="">تأكيد كلمة المرور </label>
                                            <div class="show-password"><i class="bi bi-eye-slash"></i></div>
                                            <input type="password" placeholder="*****************" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn-profile">
                                            <button type="submit" class="ctm-btn w-100">تأكيد</button>
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
