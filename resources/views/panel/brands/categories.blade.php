@if($row->categories->count() > 0)
    @foreach($row->categories as $item)
        <span class="badge @if($loop->iteration == 1) badge-soft-primary @elseif($loop->iteration == 2) badge-soft-success @else badge-soft-danger @endif">{{ $item->title }}</span>
    @endforeach
@else
    -
@endif
