<a href="{{ route("panel.categories.edit",["category"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.categories.destroy",["category"=>$row->slug]) }}">حذف</a>
