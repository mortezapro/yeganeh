<a href="{{ route("page.show",["page" => $row->slug]) }}" class="btn btn-warning" target="_blank">نمایش</a>
<a href="{{ route("admin.page.edit",["page"=>$row->slug]) }}" class="btn btn-primary">ویرایش</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("admin.page.destroy",["page"=>$row->slug]) }}">حذف</a>
