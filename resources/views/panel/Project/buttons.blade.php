<a href="{{ route("panel.projects.edit",["project"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.projects.destroy",["project"=>$row->slug]) }}">حذف</a>
