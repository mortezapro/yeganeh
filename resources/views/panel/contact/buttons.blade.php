<a href="{{ route("panel.contacts.edit",["message"=>$row->id]) }}" class="btn btn-primary">جزئیات</a>
<a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="btn btn-danger show-delete-modal" data-url-delete="{{ route("panel.contacts.destroy",["message"=>$row->id]) }}">حذف</a>
