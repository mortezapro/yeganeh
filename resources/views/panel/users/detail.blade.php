@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <title>فنجان ایرانی | مدیریت کاربران</title>
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
                                <li class="breadcrumb-item active">مدیریت کاربران</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">مدیریت کاربران</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $user->name. " ". $user->family }}</h5>
                            @include("panel.partials.notifications")
                            <div class="table-responsive">
                                <table class="table table-striped align-middle text-center w-100">
                                    <thead>
                                        <tr>
                                            <th>تلفن همراه</th>
                                            <th>ایمیل</th>
                                            <th>کد ملی</th>
                                            <th>آخرین ip لاگین شده</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->national_code }}</td>
                                            <td>{{ $user->last_login_ip }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>نقش ها</h5>
                            @include("panel.partials.notifications")
                            <div class="table-responsive">
                                <table class="table table-striped align-middle text-center w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام نمایشی</th>
                                        <th>کلید</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($user->roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->display_name }}</td>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">-</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>سفارشات</h5>
                            @include("panel.partials.notifications")
                            <div class="table-responsive">
                                <table class="table table-striped align-middle text-center w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>کد ارجاع</th>
                                            <th>نوع خرید</th>
                                            <th>کد پیگیری</th>
                                            <th>گیرنده</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($user->orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->refuse_id }}</td>
                                            <td>اینترنتی</td>
                                            <td>{{ $order->tracking_code }}</td>
                                            <td>{{ $order->receiver_name." ".$order->receiver_family }}</td>
                                            <td>{{ $order->persian_status }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route("admin.orders.edit",["order" =>$order->id ]) }}">جزئیات</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="9">
                                                -
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")

@endsection
