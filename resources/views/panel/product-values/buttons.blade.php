<a href="{{ route("admin.values.edit",["value"=>$row->id]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.values.destroy",["value"=>$row->id]) }}">حذف</a>
