@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ایجاد محصول</title>
@endsection
@section("content")
    <div class="content">
        <form action="{{ route("admin.products.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                    <li class="breadcrumb-item active">ایجاد محصول جدید</li>
                                </ol>
                            </div>
                            <h4 class="page-title d-inline-block">ایجاد محصول جدید</h4>
                            <a href="{{ route("admin.products.index") }}" class="btn btn-primary btn-rounded waves-effect waves-light d-inline-block mr-3">
                                <span class="btn-label"><i class="mdi mdi-format-list-bulleted"></i></span>
                                لیست محصولات
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                @include("panel.partials.errors")
                                @include("panel.partials.notifications")
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a
                                            href="#main"
                                            data-bs-toggle="tab"
                                            aria-expanded="false"
                                            class="nav-link active"
                                        >
                                            اصلی
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="#seo"
                                            data-bs-toggle="tab"
                                            aria-expanded="true"
                                            class="nav-link"
                                        >
                                            سئو
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="#product-details"
                                            data-bs-toggle="tab"
                                            aria-expanded="true"
                                            class="nav-link"
                                        >
                                            ویژگی ها
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="#gallery-tab"
                                            data-bs-toggle="tab"
                                            aria-expanded="true"
                                            class="nav-link"
                                        >
                                            گالری
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="main">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="title" class="form-label">نام محصول</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ old("title") }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="slug" class="form-label">slug</label>
                                                <input type="text" name="slug" id="slug" class="form-control" value="{{ old("slug") }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="category" class="form-label">دسته ها</label>
                                                <select name="category[]" id="category" class="form-control select2" multiple>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="brand" class="form-label">برند</label>
                                                <select name="brand_id" id="brand" class="form-control select2" multiple>
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="price" class="form-label">قیمت</label>
                                                <input type="text" name="price" id="price" class="form-control" value="{{ old("price") }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="warranty" class="form-label">گارانتی (ماه)</label>
                                                <input type="text" name="warranty" id="warranty" class="form-control" value="{{ old("warranty") }}">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="overview" class="form-label">بررسی اجمالی</label>
                                                <textarea type="text" name="overview" id="overview" class="form-control">{{ old("overview") }}</textarea>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="expert_review" class="form-label">نقد و بررسی فنی</label>
                                                <textarea name="expert_review" id="expert_review" class="form-control">{{ old("expert_review") }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="seo">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="canonical" class="form-label">لینک کنونیکال</label>
                                                <input type="text" name="canonical" id="canonical" class="form-control" value="{{ old("canonical") }}">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="seo_title" class="form-label">عنوان سئو</label>
                                                <input type="text" name="seo_title" id="seo_title" class="form-control" value="{{ old("seo_title") }}">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="seo_description" class="form-label">توضیحات سئو</label>
                                                <textarea type="text" name="seo_description" id="seo_description" class="form-control">{{ old("seo_description") }}</textarea>
                                            </div>
                                            <div class="gallery-preview d-flex justify-content-center" id="seo-image-preview">
                                                <img class="gallery-preview-item" src="{{ asset("seo-images/default/thumbnail.png") }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-password" class="form-label">تصویر سئو</label>
                                                <input type="file" name="seo_image" id="seo_image" class="form-control file">
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-check-input rounded-circle" type="checkbox" name="indexable" id="indexable" checked>
                                                <label for="indexable" class="form-label">ایندکس</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="product-details">
                                        <div class="row">
                                            <table class="table table-striped table-responsive text-center position-relative" id="table-details">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ویژگی</th>
                                                        <th class="width-235">مقدار</th>
                                                        <th class="width-235">قیمت</th>
                                                        <th class="width-235">قابل انتخاب</th>
                                                        <th class="width-150">حذف</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="detail-area">
                                                    <tr data-tr-row="1">
                                                        <td>1</td>
                                                        <td>
                                                            <select class="form-control product-key select2" data-id="1" style="width:100%">
                                                                <option value="-1">لطفا یک کلید انتخاب کنید</option>
                                                                @foreach($keys as $key)
                                                                    <option value="{{ $key->id }}">{{ $key->name }} ({{$key->categories[0]->title}})</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="product-value[]" class="form-control w-100 product-value1 select2">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="product-price[]" class="form-control product-price" value="{{ old("product-price") }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-check-input rounded-circle" type="checkbox" name="selectable[]" id="selectable1" value="1" checked>
                                                            <label for="selectable1" class="form-label">بله</label>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-danger" data-row="1">حذف سطر</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th colspan="6">
                                                        <a href="#" class="btn btn-primary" id="add-new-detail">ایجاد سطر جدید</a>
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="gallery-tab">
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <div class="gallery-preview d-flex justify-content-center" id="gallery-preview">
                                                    <img class="gallery-preview-item" src="{{ asset("galleries/default/thumbnail.png") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="galleries" class="form-label">گالری</label>
                                                    <input type="file" name="galleries[]" id="galleries" class="form-control file" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="card ribbon-box">
                            <div class="card-body">
                                <div class="ribbon ribbon-warning float-end">
                                    <i class="mdi mdi-access-point me-1"></i> حتما بخوانید
                                </div>
                                <h5 class="text-warning float-start mt-0">نکات کلیدی</h5>
                                <div class="ribbon-content">
                                    <ul>
                                        <li class="my-1">فیلد slug آدرس منحصر به فرد این موجودیت است.</li>
                                        <li class="my-1">به هیچ عنوان از فاصله (space) در فیلد slug استفاده نکنید</li>
                                        <li class="my-1">سعی کنید فیلد slug را به انگلیسی وارد کنید</li>
                                        <li class="my-1">با توجه به اینکه صفحه بندی به صورت pagination می باشد، اگر لینک کنونیکال خالی باشد؛ کنونیکال به صفحه اصلی دسته بدون پارامتر ارجاع داده خواهد شد. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="gallery-preview d-flex justify-content-center" id="thumbnail-preview">
                                    <img class="gallery-preview-item" src="{{ asset("post-thumbnails/default/thumbnail.png") }}">
                                </div>
                                <div class="mb-3">
                                    <label for="thumbnail">تصویر شاخص</label>
                                    <input id="thumbnail" type="file" class="file" name="thumbnail">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label d-block mb-3">وضعیت</label>
                                    <div class="btn-group">
                                        <input value="{{config("post-status.published")}}" type="radio" class="btn-check" name="status" id="status1" @if(old('status')) @if(old('status') == config("post-status.published")) checked @endif @endif checked>
                                        <label class="btn btn-outline-primary" for="status1">منتشر شده</label>
                                        <input value="{{config("post-status.disabled")}}" type="radio" class="btn-check" name="status" id="status2" @if(old('status')) @if(old('status') == config("post-status.disabled")) checked @endif @endif>
                                        <label class="btn btn-outline-primary" for="status2">غیر فعال</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="indexable" id="indexable" checked>
                                    <label for="indexable" class="form-label">فعال بودن کامنت</label>
                                </div>
                                <div class="mb-3">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="indexable" id="indexable" checked>
                                    <label for="indexable" class="form-label">موجود</label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">
                                        <span class="btn-label"><i class="mdi mdi-check-all"></i></span>ثبت
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset("panel/assets/libs/file-upload/js/fileInput.js") }}"></script>

    <script type="module" src="{{ asset("panel/assets/ckeditor5/src/ckeditor.js") }}"></script>
    <script src="{{ asset("panel/assets/ckeditor5/build/ckeditor.js") }}"></script>


    <script>
        $(document).ready(function(){
            $(".select2").select2();
            // $("#category").select2();
            // $("#brand").select2();
            $("#seo_image").change(function () {
                $("#seo-image-preview").remove();
            })

            $("#thumbnail").change(function () {
                $("#thumbnail-preview").remove();
            })

            // $(".product-key").select2();

            ClassicEditor
                .create( document.querySelector("#expert_review"), {
                    toolbar: {
                        items: [
                            'exportPdf',
                            'htmlEmbed',
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'link',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'blockQuote',
                            'insertTable',
                            'undo',
                            'redo',
                            'imageUpload',
                            'highlight',
                            'horizontalLine',
                            'fontBackgroundColor',
                            'fontColor',
                            'fontSize',
                            'alignment',
                            'CKFinder',
                            'fontFamily'
                        ]
                    },
                    language: 'fa',
                    additionalLanguages: 'all',
                    ui: 'fa',
                    content: 'fa',
                    height: "600px",
                    link: {
                        decorators: {
                            isExternal: {
                                mode: 'manual',
                                label: 'باز کردن در تب جدید',
                                attributes: {
                                    target: '_blank'
                                }
                            },
                            isNoFollow: {
                                mode: 'manual',
                                label: 'نو فالو',
                                attributes: {
                                    rel: 'nofollow'
                                }
                            }
                        }
                    },
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:full',
                            'imageStyle:side',
                            'linkImage',
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',
                    uploadUrl: '{{ route("admin.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: '{{ route("admin.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                        options: {
                            resourceType: 'Images',
                            openerMethod: 'popup'
                        }
                    },
                } ,{
                    alignment: {
                        options: [ 'right', 'right' ]
                    }})
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {});
            ClassicEditor
                .create( document.querySelector("#overview"), {
                    toolbar: {
                        items: [
                            'exportPdf',
                            'htmlEmbed',
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'link',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'blockQuote',
                            'insertTable',
                            'undo',
                            'redo',
                            'imageUpload',
                            'highlight',
                            'horizontalLine',
                            'fontBackgroundColor',
                            'fontColor',
                            'fontSize',
                            'alignment',
                            'CKFinder',
                            'fontFamily'
                        ]
                    },
                    language: 'fa',
                    additionalLanguages: 'all',
                    ui: 'fa',
                    content: 'fa',
                    height: "600px",
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:full',
                            'imageStyle:side',
                            'linkImage',
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',
                    uploadUrl: '{{ route("admin.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: '{{ route("admin.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                        options: {
                            resourceType: 'Images',
                            openerMethod: 'popup'
                        }
                    },
                } ,{
                    alignment: {
                        options: [ 'right', 'right' ]
                    }})
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {});
            let characterAllowedAscii = ["8","127","46"] /* backspace , delete */
            var price = document.getElementById("price");
            price.addEventListener('keyup', function(event){
                var n = parseInt(this.value.replace(/\D/g,''),10);
                price.value = n.toLocaleString();
            });
            $("#price").bind('keypress',function(e){
                var ew = event.which;
                if(ew >= 48 &&  ew <=57){
                    return true;
                }
                return false;
            });
        });


        // product details

        var detailCount =1;
        $(document).on("click","#add-new-detail",(function( event ) {
            detailCount++;
            var newDetailData =
                '<tr data-tr-row="'+detailCount+'">' +
                '<td>1</td>' +
                '<td>' +
                '<select class="form-control product-key select2 select-key'+detailCount+'" data-id="'+detailCount+'" style="width:100%">' +
                    '<option value="-1">لطفا یک کلید انتخاب کنید</option>' +
                    @foreach($keys as $key)
                        '<option value="{{ $key->id }}">{{ $key->name }}</option>' +
                    @endforeach
                '</select>' +
                '</td>' +
                    '<td>' +
                        '<select name="product-value[]" class="form-control w-100 select2 product-value'+detailCount+'">'+

                        '</select>'+
                    '</td>'+
                    '<td>'+
                        '<input type="text" name="product-price[]" class="form-control product-price" value="{{ old("product-price") }}">' +
                    '</td>' +
                    '<td>'+
                        '<input class="form-check-input rounded-circle" type="checkbox" name="selectable[]" id="selectable'+detailCount+'" value="1" checked>' +
                        '<label for="selectable'+detailCount+'" class="form-label">&nbsp;بله </label>'+
                    '</td>' +
                    '<td>' +
                        '<a href="#" class="btn btn-danger" data-row="'+detailCount+'">حذف سطر</a>' +
                    '</td>' +
                '</tr>';
            $("#detail-area").append(newDetailData);

            $(".select-key"+detailCount).select2();
            $(".product-value"+detailCount).select2();

        }));

        let counter = 0;
        let tableDetails = $("#table-details");
        $(document).on("change",".product-key",(function( event ) {
            event.preventDefault();
            counter++;
            let key_id = $(this).val();
            let data_id = $(this).attr("data-id");
            $.ajax({
                type:'GET',
                url:"{{ route("admin.values.by.Key.ajax") }}",
                data: {key_id:key_id},
                beforeSend: function (){
                    tableDetails.append('<tr class="ajax-loading"><td colspan="10"><div id="loading"></div></td></tr>');
                    tableDetails.append('<div id="ajax-overlay"></div>');
                },
                success:function(data) {
                    $(".ajax-loading").hide();
                    $("#ajax-overlay").remove();
                    $(".product-value"+data_id).html(data.html);
                }
            })
        }));
    </script>
@endsection
