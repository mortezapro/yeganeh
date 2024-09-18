@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ویرایش نظر </title>
@endsection
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                <li class="breadcrumb-item active">ویرایش نظر</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">ویرایش نظر </h4>
                    </div>
                </div>
            </div>
            @include("panel.partials.errors")
            @include("panel.partials.notifications")
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card table-static-height">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th colspan="10">
                                        جزئیات نظر
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>وضعیت</th>
                                    <th>ریپلای</th>
                                    <th>محتوای نظر</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td>
                                        @if($comment->status == "initialRegistration")
                                            <span class="badge badge-soft-warning p-2">{{ $comment->persian_status }}</span>
                                        @elseif($comment->status == "published")
                                            <span class="badge badge-soft-success p-2">{{ $comment->persian_status }}</span>
                                        @else
                                            <span class="badge badge-soft-danger p-2">{{ $comment->persian_status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($comment->reply_id){
                                            <a href="#" class="btn btn-outline-primary">نمایش</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary">نمایش</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card table-static-height">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th colspan="10">
                                        اطلاعات commentable
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>تصویر</th>
                                    <th>عنوان</th>
                                    <th>تاریخ ایجاد</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td>
                                        @if($comment->commentable_type == "App\Models\ProductModel")
                                            <img class="avatar-lg rounded-3" src="{{ asset("product-thumbnails/sm")."/".$comment->commentable->thumbnail }}" alt="{{ $comment->commentable->title }}">
                                        @elseif($comment->commentable_type == "App\Models\PostModel")
                                            <img class="avatar-lg rounded-3" src="{{ asset("post-thumbnails/sm")."/".$comment->commentable->thumbnail }}" alt="{{ $comment->commentable->title }}">
                                        @endif
                                    </td>
                                    <td>{{ $comment->commentable->title }}</td>
                                    <td>{{ $comment->created_at }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="card table-static-height">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th colspan="10">
                                        اطلاعات کاربر
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>اواتار</th>
                                    <th>نام کاربری</th>
                                    <th>شماره تلفن</th>
                                    <th>ایمیل</th>
                                    <th>آدرس ip</th>
                                    <th>کد پستی</th>
                                    <th>شهر</th>
                                    <th>سن</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td><img class="avatar-sm" src="{{ asset("avatar")."/".$comment->user->avatar }}" alt="{{ $comment->user->name." ". $comment->user->family }}"></td>
                                    <td>{{ $comment->user->name." ". $comment->user->family }}</td>
                                    <td>{{ $comment->user->mobile }}</td>
                                    <td>{{ $comment->user->email }}</td>
                                    <td>{{ $comment->user->last_login_ip }}</td>
                                    <td>{{ $comment->user->postal_code }}</td>
                                    <td>{{ $comment->user->city }}</td>
                                    <td>{{ $comment->user->age }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="btn btn-success">تایید</a>
                            <a href="#" class="btn btn-danger">رد</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset("panel/assets/libs/file-upload/js/fileInput.js") }}"></script>

    <script type="module" src="{{ asset("panel/assets/ckeditor5/src/ckeditor.js") }}"></script>
    <script src="{{ asset("panel/assets/ckeditor5/build/ckeditor.js") }}"></script>


    <script>

    </script>
@endsection
