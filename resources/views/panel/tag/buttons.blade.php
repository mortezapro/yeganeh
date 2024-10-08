<a href="{{ route("panel.tags.edit",["tag"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.tags.destroy",["tag"=>$row->slug]) }}">حذف</a>
