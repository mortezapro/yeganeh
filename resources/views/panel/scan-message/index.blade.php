@extends("panel.layouts.ubold")

@section("head")
    <title>لیست درخواست‌های اسکن | {{ env("APP_NAME") }}</title>
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
                            <li class="breadcrumb-item active">لیست درخواست‌های اسکن</li>
                        </ol>
                    </div>
                    <div class="page-title-left">
                        <h4 class="page-title d-inline me-2">لیست درخواست‌های اسکن</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="align-middle text-center w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>ایمیل</th>
                                <th>کد پیگیری</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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
                    <a href="#" class="btn btn-danger btn-delete">بله حذفش کن!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script type="text/javascript" charset="utf8" src="{{ asset("https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js") }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset("https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js") }}"></script>
    <script>
        let url;
        $(document).on("click", ".show-delete-modal", (function (event) {
            url = $(this).attr("data-url-delete");
            $(".btn-delete").attr("href",url);
        }));
        $('#datatable thead tr').clone(true).appendTo( '#datatable thead' );
        $('#datatable thead tr:eq(1) th').each( function (i) {
            if(i !== 0){
                var title = $(this).text();
                $(this).html( '<input class="input-search" type="text" placeholder="جستجوی '+title+'" />' );
            }
            $( 'input', this ).on( 'change change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        });

        $('#datatable').on('processing.dt',function( e, settings, processing ){
            if (processing){
                $("tbody").html('');
                $("tbody").css('height',"300px");
                $("tbody").append('<tr><td colspan="10"><div id="loading"></div></td></tr>');
            }else {
                $('#loading').hide();
                $("tbody").css('height',"auto");
            }
        });

        var table = $('#datatable').DataTable({
            fixedHeader: false,
            orderCellsTop: true,
            serverSide: true,
            "autoWidth": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Persian.json"
            },
            "scrollX": true,
            ajax: "{{ route('panel.scanMessages.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'tracking_code', name: 'tracking_code'},
                {data: 'captionStatus', name: 'captionStatus'},
                {data: 'action', name: 'action'},
            ],
        });
    </script>
@endsection
