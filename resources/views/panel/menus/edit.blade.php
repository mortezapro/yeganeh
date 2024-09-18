@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/file-upload/css/fileInput.css") }}">
    <title>فنجان ایرانی | ویرایش منو</title>
@endsection
@section("content")
    <div class="content">
        <form action="{{ route("admin.menu.store",["menu" => $menu->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                    <li class="breadcrumb-item active">ویرایش منو</li>
                                </ol>
                            </div>
                            <h4 class="page-title d-inline-block">ویرایش منو</h4>
                            <a href="{{ route("admin.menu.index") }}" class="btn btn-primary btn-rounded waves-effect waves-light d-inline-block mr-3">
                                <span class="btn-label"><i class="mdi mdi-format-list-bulleted"></i></span>
                                لیست منوها
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                @include("panel.partials.errors")
                                @include("panel.partials.notifications")
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="title" class="form-label">عنوان</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ old("title",$menu->title) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="link" class="form-label">لینک</label>
                                        <input type="text" name="link" id="link" class="form-control" value="{{ old("link",$menu->link) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="order" class="form-label">اولویت</label>
                                        <input type="text" name="order" id="order" class="form-control" value="{{ old("order",$menu->order) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="parent_id" class="form-label">والد (پدر)</label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option selected disabled value="-1">(اختیاری)</option>
                                            @foreach($menus as $item)
                                                <option @if($item->id == $menu->parent_id) selected @endif value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary">ثبت</button>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#parent_id").select2();
        });
    </script>
@endsection
