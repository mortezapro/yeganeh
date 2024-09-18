@if($row->status == config("ticket-status.awaiting-answer"))
    <span class="badge badge-soft-primary p-2">در انتظار پاسخ</span>
@elseif($row->status == config("ticket-status.answered"))
    <span class="badge badge-soft-primary p-2">پاسخ داده شده</span>
@elseif($row->status == config("ticket-status.rejected"))
    <span class="badge badge-soft-primary p-2">بسته شده</span>
@endif
