@if($row->status == 1010)
    <span class="badge badge-soft-primary p-2">پرداخت شده</span>
@elseif($row->status == 1011)
    <span class="badge badge-soft-primary p-2">پرداخت نشده</span>
@elseif($row->status == 1012)
    <span class="badge badge-soft-primary p-2">در حال آماده سازی</span>
@elseif($row->status == 1013)
    <span class="badge badge-soft-primary p-2">در حال ارسال</span>
@elseif($row->status == 1014)
    <span class="badge badge-soft-primary p-2">ارسال شده</span>
@endif
