@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span> تواصل معنا </span>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="contactus mr-section">
            <div class="main-container">
                <div class="title-center">
                    <h2>للتواصل معنا </h2>
                </div>

                <div class="form-contactus">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="input-form">
                            <label for="">الاسم بالكامل </label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for="">البريد الالكتروني</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for="">الموضوع </label>
                            <input type="text" class="form-control" name="object" value="{{ old('object') }}" required>
                            @error('object')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for="">الرسالة</label>
                            <textarea class="form-control" name="message" id="" required cols="30" rows="10">{{ old('message') }}</textarea>
                            @error('message')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="btn-form-contactus text-center margin-10">
                            <button type="submit" class="ctm-btn"> <span> إرسال <i class="bi bi-chevron-double-left"></i>
                                </span></button>
                        </div>
                    </form>
                </div>
                <div id="map" style="height: 500px;"></div>
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
