<a href="{{ route("admin.comments.edit",["comment"=>$row->id]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.comments.destroy",["comment"=>$row->id]) }}">حذف</a>
