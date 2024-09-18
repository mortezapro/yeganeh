<a href="{{ route("admin.keys.edit",["key"=>$row->id]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.keys.destroy",["key"=>$row->id]) }}">حذف</a>
