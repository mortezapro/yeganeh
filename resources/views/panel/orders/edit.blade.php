@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ویرایش سفارشات </title>
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
                                <li class="breadcrumb-item active">ویرایش سفارشات</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">ویرایش سفارش {{ $order->tracking_code }}</h4>
                    </div>
                </div>
            </div>
            @include("panel.partials.errors")
            @include("panel.partials.notifications")
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card table-static-height">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th colspan="10">
                                            جزئیات سفارش
                                        </th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th>کد پیگیری</th>
                                        <th>کد ارجاع</th>
                                        <th>وضعیت</th>
                                        <th>توضیحات</th>
                                        <th>تاریخ ثبت سفارش</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>{{ $order->tracking_code }}</td>
                                        <td>{{ $order->refuse_id }}</td>
                                        <td>
                                            <span class="badge badge-soft-primary p-2">{{ $order->persian_status }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#description-modal">نمایش</a>
                                        </td>
                                        <td>{{ $order->created_at }}</td>
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
                                        تحویل گیرنده
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>نام و نام خانوادگی</th>
                                    <th>کد پستی</th>
                                    <th>آدرس ارسال</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td>@if($order->receiver_name) {{ $order->receiver_name." ".$order->receiver_family  }} @else - @endif</td>
                                    <td>@if($order->receiver_postal_code) {{ $order->receiver_postal_code }} @else - @endif</td>
                                    <td>@if($order->receiver_address) {{ $order->receiver_address }} @else - @endif</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card table-static-height">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th colspan="10">
                                        جزئیات پرداخت
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>مبلغ</th>
                                    <th>وضعیت</th>
                                    <th>کد پیگیری بانک</th>
                                    <th>نام بانک</th>
                                    <th>تاریخ پرداخت</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>@if($order->payment) {{ $order->payment->price }} @else - @endif</td>
                                        <td>@if($order->payment) {{ $order->payment->status }} @else - @endif</td>
                                        <td>@if($order->payment) {{ $order->tracking_code }} @else - @endif</td>
                                        <td>@if($order->payment) {{ $order->bank }} @else - @endif</td>
                                        <td>@if($order->payment) {{ $order->created_at }} @else - @endif</td>
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
                                        اطلاعات خریدار
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>نام کاربر</th>
                                    <th>ایمیل</th>
                                    <th>تلفن همراه</th>
                                    <th>نام کاربری</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td>@if($order->user) {{ $order->user->name }} @else - @endif</td>
                                    <td>@if($order->user) {{ $order->user->email }} @else - @endif</td>
                                    <td>@if($order->user) {{ $order->user->mobile }} @else - @endif</td>
                                    <td>@if($order->user) {{ $order->user->name." ".$order->user->family }} @else - @endif</td>
                                    <th>
                                        <a href="{{ route("admin.user.login",["user" => $order->user->mobile]) }}" class="btn btn-outline-primary">ورود به عنوان کاربر</a>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#user-information">اطلاعات بیشتر</a>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-center table-striped table-responsive mb-5 align-middle">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th colspan="10">
                                        تاریخچه وضعیت سفارش
                                    </th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>تاریخ</th>
                                    <th>از</th>
                                    <th>به</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($order->history as $history)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $history->change_date }}</td>
                                        <td>
                                            <span class="badge badge-soft-primary p-2">{{ $history->from_status_persian }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-success p-2">{{ $history->to_status_persian }}</span>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">تغییر وضعیت به :</h5>
                            <a href="{{ route("admin.orders.change.status",["order"=>$order->id,"status"=>config("order-status.preparing")]) }}" class="btn btn-info">در حال آماده سازی</a>
                            <a href="{{ route("admin.orders.change.status",["order"=>$order->id,"status"=>config("order-status.sending")]) }}" class="btn btn-warning">در حال ارسال</a>
                            <a href="{{ route("admin.orders.change.status",["order"=>$order->id,"status"=>config("order-status.delivered")]) }}" class="btn btn-primary">تحویل داده شده</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="description-modal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title uc-first">توضیحات سفارش</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body line-1">
                    {{ $order->description }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="user-information" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title uc-first">اطلاعات کاربر</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body line-1">
                    <table class="table table-striped text-center align-middle table-responsive">
                        <tbody>
                            <tr>
                                <th>نام</th>
                                <td>{{ $order->user->name }}</td>
                            </tr>
                            <tr>
                                <th>موبایل</th>
                                <td>{{ $order->user->mobile }}</td>
                            </tr>
                            <tr>
                                <th>ایمیل</th>
                                <td>{{ $order->user->email }}</td>
                            </tr>
                            <tr>
                                <th>شهر</th>
                                <td>{{ $order->user->city }}</td>
                            </tr>
                            <tr>
                                <th>استان</th>
                                <td>{{ $order->user->province }}</td>
                            </tr>
                            <tr>
                                <th>age</th>
                                <td>{{ $order->user->age }}</td>
                            </tr>
                            <tr>
                                <th>آخرین آدرس ip</th>
                                <td>{{ $order->user->last_login_ip }}</td>
                            </tr>
                            <tr>
                                <th>کد پستی</th>
                                <td>{{ $order->user->postal_code }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
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
