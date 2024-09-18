@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ویرایش مقدار</title>
@endsection
@section("content")
    <div class="content">
        <form action="{{ route("admin.values.store",["value"=> $value->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                    <li class="breadcrumb-item active">ویرایش مقدار</li>
                                </ol>
                            </div>
                            <h4 class="page-title d-inline-block">ایجاد مقدار جدید</h4>
                            <a href="{{ route("admin.keys.index") }}" class="btn btn-primary btn-rounded waves-effect waves-light d-inline-block mr-3">
                                <span class="btn-label"><i class="mdi mdi-format-list-bulleted"></i></span>
                                لیست مقادیر
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
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="main">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="value" class="form-label">مقدار</label>
                                                <input type="text" name="value" id="value" class="form-control" value="{{ old("value",$value->value) }}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="product_key_id" class="form-label">ویژگی</label>
                                                <select name="product_key_id" id="product_key_id" class="form-control">
                                                    <option value="-1" selected disabled>لطفا انتخاب کنید</option>
                                                    @foreach($keys as $key)
                                                        <option @if($key->id == $value->product_key_id) selected @endif value="{{ $key->id }}">{{ $key->name. " (".$key->categories[0]->title.")" }}</option>
                                                    @endforeach
                                                </select>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        let url;
        $(document).on("click",".show-delete-modal",(function( event ) {
            url = $(this).attr("data-role");
            $(".btn-delete").attr("href", url);
        }));

        $(document).ready(function(){
            $("#product_key_id").select2();
        });
    </script>
@endsection
