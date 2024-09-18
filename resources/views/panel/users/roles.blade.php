@if($row->roles->count() > 0)
    @forelse($row->roles as $item)
        <span class="badge p-1 @if($loop->iteration == 1) badge-soft-primary @elseif($loop->iteration == 2) badge-soft-success @else badge-soft-danger @endif">{{ $item->display_name }}</span>
    @empty
        <span> - </span>
    @endforelse
@endif
