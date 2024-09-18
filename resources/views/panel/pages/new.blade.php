@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ایجاد صفحه</title>
@endsection
@section("content")
    <div class="content">
        <form action="{{ route("admin.page.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                    <li class="breadcrumb-item active">ایجاد صفحه جدید</li>
                                </ol>
                            </div>
                            <h4 class="page-title d-inline-block">ایجاد صفحه جدید</h4>
                            <a href="{{ route("admin.categories.index") }}" class="btn btn-primary btn-rounded waves-effect waves-light d-inline-block mr-3">
                                <span class="btn-label"><i class="mdi mdi-format-list-bulleted"></i></span>
                                لیست صفحات
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
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="main">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="title" class="form-label">عنوان (تگ h1)</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ old("title") }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="slug" class="form-label">slug</label>
                                                <input type="text" name="slug" id="slug" class="form-control" value="{{ old("slug") }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="layout" class="form-label">طرح صفحه</label>
                                                <select class="form-control" name="layout_id" id="layout">
                                                    <option value="1">لندینگ پیج یک</option>
                                                    <option value="2">لندینگ پیج دو</option>
                                                    <option value="3">طرح پیش فرض</option>
                                                    <option value="4">طرح سفارشی</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="content" class="form-label">محتوا</label>
                                                <textarea name="content" id="content" class="form-control">{{ old("content") }}</textarea>
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
                                    <ul class="mb-3">
                                        <li class="my-1">فیلد slug آدرس منحصر به فرد این موجودیت است.</li>
                                        <li class="my-1">به هیچ عنوان از فاصله (space) در فیلد slug استفاده نکنید</li>
                                        <li class="my-1">سعی کنید فیلد slug را به انگلیسی وارد کنید</li>
                                    </ul>
                                    <div class="mb-3">
                                        <input class="form-check-input rounded-circle" type="checkbox" name="display_header" id="display_header">
                                        <label for="display_header" class="form-label">عدم نمایش header پیش فرض</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-check-input rounded-circle" type="checkbox" name="display_footer" id="display_footer">
                                        <label for="display_footer" class="form-label">عدم نمایش Footer پیش فرض</label>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-check-all"></i></span>ثبت
                                        </button>
                                    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset("panel/assets/libs/file-upload/js/fileInput.js") }}"></script>

    <script type="module" src="{{ asset("panel/assets/ckeditor5/src/ckeditor.js") }}"></script>
    <script src="{{ asset("panel/assets/ckeditor5/build/ckeditor.js") }}"></script>


    <script>
        let url;
        $(document).on("click",".show-delete-modal",(function( event ) {
            url = $(this).attr("data-role");
            $(".btn-delete").attr("href", url);
        }));

        $(document).ready(function(){

            $("#seo_image").change(function () {
                $("#seo-image-preview").remove();
            })

            $("#thumbnail").change(function () {
                $("#thumbnail-preview").remove();
            })

            $("#parent").select2();
            ClassicEditor
                .create( document.querySelector("#content"), {
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
        });
    </script>
@endsection
