@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <title>فنجان ایرانی | لیست درخواست های مشاوره</title>
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
                                <li class="breadcrumb-item active">لیست درخواست های مشاوره</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">لیست درخواست های مشاوره</h4>
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
                                    @forelse($consultations as $consultation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $consultation->mobile }}</td>
                                            <td>{{ \Morilog\Jalali\Jalalian::forge($consultation->created_at)->format("i:H | %d - %m - %Y") }}</td>
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
