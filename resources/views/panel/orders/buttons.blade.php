<a href="{{ route("admin.orders.edit",["order"=>$row->id]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.orders.destroy",["order"=>$row->id]) }}">حذف</a>
