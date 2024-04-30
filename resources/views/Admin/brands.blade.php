@extends('Dashboard.layouts.master')
@section('title')
    قائمة العلامات التجاريه
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">قائمة العلامات التجاريه</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="default-color">الرئيسيه</a></li>
                    <li class="breadcrumb-item active">قائمة العلامات التجاريه</li>
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
                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        اضافة علامه تجاريه جديده
                    </button>
                    <br><br>
                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                            style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم العلامه تجاريه</th>
                                    <th> الصوره</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>
                                            <img src="{{ $brand->image }}" alt=""
                                                style="width: 50px;height:50px;border-radius:50%">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $brand->id }}" title="تعديل"><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $brand->id }}" title="حذف"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{ $brand->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        تعديل العلامه تجاريه
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form action="{{ route('admin.brands.update', $brand->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @method('patch')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="name" class="mr-sm-2">اسم العلامه تجاريه
                                                                    :</label>
                                                                <input id="name" type="text" name="name"
                                                                    class="form-control" value="{{ $brand->name }}"
                                                                    required>
                                                                <input id="id" type="hidden" name="id"
                                                                    class="form-control" value="{{ $brand->id }}">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="image">صورة العلامه التجاريه</label>
                                                                <input type="file" accept="image/*" name="image"
                                                                    class="form-control" value="">
                                                                @error('image')
                                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">الغاء</button>
                                                            <button type="submit" class="btn btn-success">تعديل</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- delete_modal_Grade -->
                                    <div class="modal fade" id="delete{{ $brand->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف العلامه تجاريه
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.brands.destroy', $brand->id) }}"
                                                        method="post">
                                                        @method('Delete')
                                                        @csrf
                                                        هل انت متاكد من عملية حذف العلامه تجاريه؟
                                                        <br>
                                                        <input id="id" type="hidden" name="id"
                                                            class="form-control" value="{{ $brand->id }}">
                                                        <input id="id" type="text" name="name" readonly
                                                            class="form-control" value="{{ $brand->name }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">الغاء</button>
                                                            <button type="submit" class="btn btn-danger">حذف</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- add_modal_Grade -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                            اضافة علامه تجاريه جديده
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">اسم العلامه تجاريه
                                        :</label>
                                    <input id="Name" type="text" name="name" class="form-control"
                                        value="">
                                </div>
                                <div class="col-12">
                                    <label for="image">صورة العلامه التجاريه</label>
                                    <input type="file" accept="image/*" name="image" class="form-control"
                                        value="">
                                    @error('image')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-success">حفظ</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- row closed -->
@endsection
@section('js')
@endsection