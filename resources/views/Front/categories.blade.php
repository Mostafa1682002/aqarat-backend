@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span> الاقسام</span>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="categories-page mr-section">
            <div class="main-container">
                <div class="title-center">
                    <h2> الاقسام </h2>
                </div>
                <div class="row mt-5 row-gap">
                    @forelse ($categories as $category)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="sub-categories.html">
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
    </main>
@endsection

@push('js')
@endpush
