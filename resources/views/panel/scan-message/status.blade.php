@if($row->status == config("message-status.initialRegistration"))
    <span class="badge bg-warning p-1">{{ $row->captionStatus }}</span>
@elseif($row->status == config("message-status.inProgress"))
    <span class="badge bg-primary p-1">{{ $row->captionStatus }}</span>
@elseif($row->status == config("message-status.checked"))
    <span class="badge bg-success p-1">{{ $row->captionStatus }}</span>
@endif
