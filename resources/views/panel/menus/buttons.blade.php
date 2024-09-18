<a href="{{ route("admin.menu.edit",["menu"=>$row->id]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.menu.destroy",["menu"=>$row->id]) }}">حذف</a>
