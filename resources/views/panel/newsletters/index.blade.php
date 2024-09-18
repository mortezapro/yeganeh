@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <title>فنجان ایرانی | خبرنامه</title>
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
                                <li class="breadcrumb-item active">خبرنامه</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">خبرنامه</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            @include("panel.partials.notifications")
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped align-middle text-center w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>تلفن همراه</th>
                                        <th>تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($newsletters as $newsletter)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $newsletter->email }}</td>
                                            <td>{{ \Morilog\Jalali\Jalalian::forge($newsletter->created_at)->format("i:H | %d - %m - %Y") }}</td>
                                        </tr>
                                    @empty
                                        -
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
