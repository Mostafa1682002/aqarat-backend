@extends('Admin.layouts.master')
@section('title')
    قائمة الاعلانات
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">قائمة الاعلانات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="default-color">الرئيسيه</a></li>
                    <li class="breadcrumb-item active">قائمة الاعلانات</li>
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
                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                            style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المستخدم</th>
                                    <th>الهاتف</th>
                                    <th>اسم العقار</th>
                                    <th>السعر</th>
                                    <th>القسم</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($advertisements as $advertisement)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $advertisement->user->name }}</td>
                                        <td>{{ $advertisement->phone }}</td>
                                        <td>{{ $advertisement->name }}</td>
                                        <td>{{ $advertisement->price }}</td>
                                        <td>{{ $advertisement->category->name }}</td>
                                        <td>
                                            <span class="badge {{ $advertisement->status->badge() }}">
                                                {{ $advertisement->status->status() }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.advertisements.show', $advertisement->id) }}"
                                                class="btn btn-warning btn-sm text-white" title="عرض"><i
                                                    class="fas fa-eye"></i></a>

                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $advertisement->id }}" title="تعديل"><i
                                                    class="fa fa-edit"></i></button>

                                            {{-- <a href="{{ route('admin.advertisements.edit', $advertisement->id) }}"
                                                class="btn btn-info btn-sm" title="تعديل"><i class="fa fa-edit"></i></a> --}}
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $advertisement->id }}" title="حذف"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{ $advertisement->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        تعديل حالة الاعلان
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form
                                                        action="{{ route('admin.advertisements.update', $advertisement->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @method('patch')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="name" class="">اسم العقار
                                                                    :</label>
                                                                <input id="name" type="text" name="name"
                                                                    class="form-control" value="{{ $advertisement->name }}"
                                                                    required>
                                                                <input id="id" type="hidden" name="id"
                                                                    class="form-control" value="{{ $advertisement->id }}">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="name" class="mr-sm-2">الحالة
                                                                    :</label>
                                                                <select name="status" id="status" size="1"
                                                                    class="form-control form-white">
                                                                    @foreach (collect(\App\enums\Status::cases())->toArray() as $status)
                                                                        <option value="{{ $status }}"
                                                                            @selected($status == $advertisement->status)>
                                                                            {{ $status->status() }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
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
                                    <div class="modal fade" id="delete{{ $advertisement->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف الاعلان
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('admin.advertisements.destroy', $advertisement->id) }}"
                                                        method="post">
                                                        @method('Delete')
                                                        @csrf
                                                        <h6>
                                                            هل انت متاكد من عملية حذف الاعلان
                                                            ؟
                                                        </h6>
                                                        <br>
                                                        <div class="col-12">
                                                            <label for="">اسم العقار</label>
                                                            <input id="id" type="hidden" name="id"
                                                                class="form-control" value="{{ $advertisement->id }}">
                                                            <input id="id" type="text" name="name" readonly
                                                                class="form-control" value="{{ $advertisement->name }}">
                                                        </div>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- row closed -->
@endsection
@section('js')
@endsection
