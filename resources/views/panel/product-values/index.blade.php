@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <title>فنجان ایرانی | لیست مقادیر</title>
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
                                <li class="breadcrumb-item active">لیست مقادیر ها</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">لیست مقادیر</h4>
                        <a href="{{ route("admin.values.create") }}" class="btn btn-primary btn-rounded waves-effect waves-light d-inline-block mr-3">
                            <span class="btn-label"><i class="mdi mdi-plus"></i></span>
                            ایجاد مقدار جدید
                        </a>
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
                                        <th>دسته</th>
                                        <th>ویژگی</th>
                                        <th>مقدار</th>
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
        </div>
    </div>
    <div class="modal fade" id="confirm-delete" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title uc-first">حذف مقدار</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>مقدار حذف خواهد شد. آیا مطمئن هستید؟</p>
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
                $(this).html( '<input type="text" placeholder="جستجوی '+title+'" />' );
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
            ajax: "{{ route('admin.values.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'category', name: 'category'},
                {data: 'key', name: 'key'},
                {data: 'value', name: 'value'},
                {data: 'action', name: 'action'},
            ],
        });
    </script>
@endsection
