@extends("panel.layouts.ubold")

@section("head")
    <title>جزئیات درخواست‌ | {{ env("APP_NAME") }}</title>
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <style>
        table,th,td{
            text-align: center!important;
        }
        .input-search,.input-search:active,.input-search:focus{
            border:none;
            outline: none;
            padding-bottom: 5px;
            border-bottom: 1px solid #dcd5d5;
        }
        html[data-bs-theme=dark] .dataTables_wrapper .dataTables_filter input{
            color:#dcd5d5;
        }
        html[data-bs-theme=dark] .input-search,html[data-bs-theme=dark] .input-search:active,html[data-bs-theme=dark] .input-search:focus{
            background: transparent;
        }
        html[data-bs-theme=dark] select option{
            background: var(--ct-topbar-bg);
        }
        html[data-bs-theme=dark] label,html[data-bs-theme=dark] select,html[data-bs-theme=dark] .dataTables_info,html[data-bs-theme=dark] .dataTables_paginate a{
            color: #666;
        }
        table.dataTable thead th, table.dataTable thead td{
            border: none;
        }
        .spacer{
            padding-top: 1em;
        }
        .custom-columns {
            display: flex;
            justify-content: space-between;
        }
        .flex-column {
            flex: 1;
            text-align: center;
            padding: 20px;
            margin: 5px;
        }
    </style>
@endsection
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route("panel.dashboard") }}">داشبورد</a></li>
                            <li class="breadcrumb-item active">جزئیات درخواست‌</li>
                        </ol>
                    </div>
                    <div class="page-title-left">
                        <h4 class="page-title d-inline me-2">جزئیات درخواست‌</h4>
                        <a href="{{ route("panel.scanMessages.index") }}" class="btn btn-primary"><i class="fe-list"></i> لیست درخواست‌ها</a>
                    </div>
                </div>
            </div>
        </div>
        @include("panel.partials.notifications")
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="col-12 d-flex custom-columns">
                            <div class="flex-column">
                                <strong class="d-lock">نام و نام خانوادگی</strong>
                                <span class="d-block mt-1">{{ $scanMessage->name }}</span>
                            </div>
                            <div class="flex-column">
                                <strong class="d-lock">ایمیل</strong>
                                <span class="d-block mt-1">{{ $scanMessage->email }}</span>
                            </div>
                            <div class="flex-column">
                                <strong class="d-block">وضعیت</strong>
                                <span class="d-block mt-1">
                                    @if($scanMessage->status == config("message-status.initialRegistration"))
                                        <span class="badge bg-warning p-1">{{ $scanMessage->captionStatus }}</span>
                                    @elseif($scanMessage->status == config("message-status.inProgress"))
                                        <span class="badge bg-primary p-1">{{ $scanMessage->captionStatus }}</span>
                                    @elseif($scanMessage->status == config("message-status.checked"))
                                        <span class="badge bg-success p-1">{{ $scanMessage->captionStatus }}</span>
                                    @endif
                                </span>
                            </div>
                            <div class="flex-column">
                                <strong class="d-block">کد پیگیری</strong>
                                <span class="d-block mt-1">{{ $scanMessage->tracking_code }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body line-h-1">
                        {!! $scanMessage->content !!}
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body ">
                        @if($scanMessage->status != config("message-status.initialRegistration"))
                            <a href="{{ route("panel.scanMessage.changeStatus",["scanMessage" => $scanMessage->id])."?status=".config("message-status.initialRegistration") }}" class="btn btn-warning">ثبت اولیه</a>
                        @endif
                        @if($scanMessage->status != config("message-status.inProgress"))
                            <a href="{{ route("panel.scanMessage.changeStatus",["scanMessage" => $scanMessage->id])."?status=".config("message-status.inProgress") }}" class="btn btn-primary">در حال بررسی</a>
                        @endif
                        @if($scanMessage->status != config("message-status.checked"))
                            <a href="{{ route("panel.scanMessage.changeStatus",["scanMessage" => $scanMessage->id])."?status=".config("message-status.checked") }}" class="btn btn-success">بررسی شده</a>
                        @endif
                            <a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger" style="float: left">حذف</a>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body line-h-1">
                        <div class="mb-3">
                            <form method="post" action="{{ route("panel.scanMessage.set-comment",["scanMessage" => $scanMessage->id]) }}">
                                @csrf
                                <label for="admin_comment">توضیحات مدیر</label>
                                <textarea id="admin_comment" name="admin_comment" style="height: 100px" class="form-control" placeholder="تایپ کنید...">{{ $scanMessage->admin_comment }}</textarea>
                                <button class="btn btn-success mt-3">اعمال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm-delete" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title uc-first">حذف درخواست</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>درخواست حذف خواهد شد. آیا مطمئن هستید؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                    <a href="{{ route("panel.scanMessages.destroy",["scanMessage" => $scanMessage->id]) }}" class="btn btn-danger btn-delete">بله حذفش کن!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")

@endsection
