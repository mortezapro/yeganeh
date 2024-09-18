<a href="{{ route("admin.brands.edit",["brand"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.brands.destroy",["brand"=>$row->slug]) }}">حذف</a>
