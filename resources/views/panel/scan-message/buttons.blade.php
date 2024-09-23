<a href="{{ route("panel.scanMessages.edit",["scanMessage"=>$row->tracking_code]) }}" class="btn btn-primary">جزئیات</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.scanMessages.destroy",["scanMessage"=>$row->id]) }}">حذف</a>
