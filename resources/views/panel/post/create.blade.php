@extends("panel.layouts.ubold")
<link rel="stylesheet" href="{{ asset("panel/assets/libs/select2/css/select2.min.css") }}">
<link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>ایجاد پست جدید | {{ env("APP_NAME") }}</title>
@section("head")
@endsection
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route("panel.dashboard") }}">داشبورد</a></li>
                            <li class="breadcrumb-item active">ایجاد پست جدید</li>
                        </ol>
                    </div>
                    <div class="page-title-left">
                        <h4 class="page-title d-inline me-2">افزودن پست جدید</h4>
                        <a href="{{ route("panel.posts.index") }}" class="btn btn-primary"><i class="fe-list"></i> لیست پست‌ها</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ route("panel.posts.store") }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
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
                                                <div class="col-md-6 mb-3">
                                                    <label for="title" class="form-label">عنوان پست</label>
                                                    <input type="text" name="title" id="title" class="form-control" value="{{ old("title") }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="slug" class="form-label">slug</label>
                                                    <input type="text" name="slug" id="slug" class="form-control" value="{{ old("slug") }}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="category" class="form-label">دسته ها</label>
                                                    <select name="category[]" id="category" class="form-control" multiple>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label for="description" class="form-label">توضیحات</label>
                                                    <textarea type="text" name="description" id="description" class="form-control">{{ old("description") }}</textarea>
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
                                                    <input class="form-check-input rounded-circle" type="checkbox" name="indexable" id="indexable" checked value="1">
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
                                        <ul>
                                            <li class="my-1">فیلد slug آدرس منحصر به فرد این موجودیت است.</li>
                                            <li class="my-1">به هیچ عنوان از فاصله (space) در فیلد slug استفاده نکنید</li>
                                            <li class="my-1">سعی کنید فیلد slug را به انگلیسی وارد کنید</li>
                                            <li class="my-1">با توجه به اینکه صفحه بندی به صورت pagination می باشد، اگر لینک کنونیکال خالی باشد؛ کنونیکال به صفحه اصلی دسته بدون پارامتر ارجاع داده خواهد شد. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card sticky-top">
                                <div class="card-body">
                                    <div class="gallery-preview" id="thumbnail-preview">
                                        <img class="gallery-preview-item" src="{{ asset("post-thumbnails/default/thumbnail.png") }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="thumbnail">تصویر شاخص</label>
                                        <input id="thumbnail" type="file" class="file" name="thumbnail">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="post_type" class="form-label">نوع پست</label>
                                        <select name="type" id="post_type" class="form-control">
                                            <option value="{{ config("post-type.article") }}">پست</option>
                                            <option value="{{ config("post-type.news") }}">خبر</option>
                                            <option value="{{ config("post-type.event") }}">رویداد</option>
                                            <option value="{{ config("post-type.video") }}">ویدئو</option>
                                            <option value="{{ config("post-type.download") }}">دانلود</option>
                                            <option value="{{ config("post-type.solution") }}">راهکار</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label d-block mb-3">وضعیت</label>
                                        <div class="btn-group">
                                            <input value="{{config("post-status.published")}}" type="radio" class="btn-check" name="status" id="status1" @if(old('status')) @if(old('status') == config("post-status.published")) checked @endif @endif checked>
                                            <label class="btn btn-outline-primary" for="status1">انتشار</label>
                                            <input value="{{config("post-status.disabled")}}" type="radio" class="btn-check" name="status" id="status2" @if(old('status')) @if(old('status') == config("post-status.disabled")) checked @endif @endif>
                                            <label class="btn btn-outline-primary" for="status2">پیش‌نویس</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">
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
    </div>
@endsection
@section("script")
    <script src="{{ asset("panel/assets/libs/select2/js/select2.min.js") }}"></script>
    <script src="{{ asset("panel/assets/libs/file-upload/js/fileInput.js") }}"></script>
    <script type="module" src="{{ asset("panel/assets/ckeditor5/src/ckeditor.js") }}"></script>
    <script src="{{ asset("panel/assets/ckeditor5/build/ckeditor.js") }}"></script>
    <script>
        $(document).ready(function (){
            $("#category").select2();
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
                    uploadUrl: '{{ route("panel.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: '{{ route("panel.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
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
                .create( document.querySelector("#description"), {
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
                    uploadUrl: '{{ route("panel.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: '{{ route("panel.ckeditor.upload") }}?command=QuickUpload&type=Images&responseType=json',
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
        })
    </script>
@endsection
