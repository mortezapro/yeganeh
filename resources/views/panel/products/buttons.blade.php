<a href="{{ route("admin.products.edit",["product"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.products.destroy",["product"=>$row->slug]) }}">حذف</a>
