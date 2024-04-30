@extends('Admin.layouts.master')
@section('title')
    الاعدادات
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">الاعدادات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="default-color">الرئيسيه</a></li>
                    <li class="breadcrumb-item active">الاعدادات</li>
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
                    <form action="{{ route('admin.settings.update', $setting->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">عن المتجر <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="first_about_us" id="exampleFormControlTextarea1" rows="10">{{ $setting->first_about_us }}</textarea>
                            @error('first_about_us')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">عن المتجر اخري<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="second_about_us" id="exampleFormControlTextarea1" rows="10">{{ $setting->second_about_us }}</textarea>
                            @error('second_about_us')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="f_link">لينك الفيس بوك</label>
                                <input type="text" name="f_link" class="form-control" value="{{ $setting->f_link }}">
                                @error('f_link')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="i_link">لينك الانستجرام</label>
                                <input type="text" name="i_link" class="form-control" value="{{ $setting->i_link }}">
                                @error('i_link')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="t_link">لينك تويتر</label>
                                <input type="text" name="t_link" class="form-control" value="{{ $setting->t_link }}">
                                @error('t_link')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="s_link">لينك الاسناب شات</label>
                                <input type="text" name="s_link" class="form-control" value="{{ $setting->s_link }}">
                                @error('s_link')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="y_link">الشعار</label>
                                <input name="logo" type="file" class="dropify" data-height="100" />
                                @error('s_link')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <img src="{{ $setting->logo }}" alt="">
                            </div>
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تحديث</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
