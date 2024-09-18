@if(strval($row->department_id) == 1)
    <span class="badge badge-soft-primary p-2">واحد حسابداری</span>
@elseif(strval($row->department_id) == 2)
    <span class="badge badge-soft-primary p-2">واحد فنی</span>
@elseif(strval($row->department_id) == 3)
    <span class="badge badge-soft-primary p-2">واحد مدیریت</span>
@elseif(strval($row->department_id) == 4)
    <span class="badge badge-soft-primary p-2">واحد پشتیبانی</span>
@endif
