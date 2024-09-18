<a href="{{ route("admin.posts.edit",["post"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.posts.destroy",["post"=>$row->slug]) }}">حذف</a>
