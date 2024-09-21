<a href="{{ route("panel.posts.edit",["post"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.posts.destroy",["post"=>$row->slug]) }}">حذف</a>
