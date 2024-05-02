@extends('Front.layouts.app')
@section('breadcrumb-header')
    <div class="breadcrumb-header">
        <a href="index.html"> <i class="bi bi-house"></i> الرئيسية </a>
        <i class="bi bi-chevron-double-left"></i>
        <span> اضافة اعلان</span>
    </div>
@endsection



@section('content')
    <main id="app">
        <section class="register-providers mr-section">
            <div class="main-contatiner">
                <form action="{{ route('advertisements.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title-center">
                        <h2> اضافة اعلان </h2>
                    </div>
                    <div class="form-register-providers">
                        <div class="input-form">
                            <label for=""> اسم العقار </label>
                            <input type="text" placeholder="الاسم" required value="{{ old('name') }}"
                                class="form-control" name="name">
                            @error('name')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for="">السعر </label>
                            <input type="number" step="any" placeholder="10,000 ر.س" required
                                value="{{ old('price') }}" class="form-control" name="price">
                            @error('price')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> رقم الجوال</label>
                            <input type="text" placeholder="رقم الجوال" value="{{ old('phone') }}" required
                                class="form-control" name="phone">
                            @error('phone')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form arrow-select">
                            <label for=""> نوع العقار </label>
                            <select class="form-select form-control " name="category_id" required
                                value="{{ old('category_id') }}">
                                <option value="" selected disabled> نوع العقار </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                                {{-- <option value=""> شقه </option>
                                <option value=""> عمائر </option> --}}
                            </select>
                        </div>
                        <div class="input-form">
                            <label for=""> صورة العقار </label>
                            <div class="input-uploadimgs">
                                <input type="file" id="imageInput" name="image" required>
                                <label for="imageInput" class="form-control"></label>
                                <div id="imageContainer"></div>
                            </div>
                            @error('image')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> العنوان </label>
                            <input type="text" placeholder="العنوان" class="form-control" name="address" required
                                value="{{ old('address') }}">
                            @error('address')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> عدد الادوار: </label>
                            <input type="number" placeholder="عدد الادوار" class="form-control"
                                value="{{ old('number_floors') }}" required name="number_floors">
                            @error('number_floors')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> عدد الغرف: </label>
                            <input type="number" placeholder="عدد الغرف" class="form-control"
                                value="{{ old('number_rooms') }}" required name="number_rooms">
                            @error('number_rooms')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> عدد الصالات: </label>
                            <input type="number" placeholder="عدد الصالات" class="form-control"
                                value="{{ old('number_halls') }}" required name="number_halls">
                            @error('number_halls')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> عدد المطابخ : </label>
                            <input type="number" placeholder="عدد المطابخ" value="{{ old('number_kitchens') }}"
                                class="form-control" name="number_kitchens" required>
                            @error('number_kitchens')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> المصعد : </label>
                            <select class="form-select form-control " name="elevator">
                                <option value="1"> يوجد </option>
                                <option value="0"> لا يوجد </option>
                            </select>
                            @error('elevator')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> مفروش : </label>
                            <select class="form-select form-control " name="furnished">
                                <option value="1"> يوجد </option>
                                <option value="0"> لا يوجد </option>
                            </select>
                            @error('furnished')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> الفئة :</label>
                            <select class="form-select form-control " name="type">
                                <option value="للايجار"> للايجار</option>
                                <option value="للبيع"> للبيع</option>
                            </select>
                            @error('type')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for=""> نبذة عن العقار </label>
                            <textarea name="description" class="form-control" placeholder="نبذة مختصرة " id="bio" cols=""
                                rows="">{{ old('description') }}</textarea>
                            @error('description')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="btn-forms text-center">
                            <button type="submit" class="ctm-btn"> إرسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@push('js')
@endpush
