@if($row->parent)
    <span>{{ $row->parent->title }}</span>
@else
    -
@endif
