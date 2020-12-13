<form class="pet-filter" action="{{$action ?? ''}}" method="GET">
    @foreach ($rows as $row)
        <div class="pet-filter-row">
        @foreach ($row->items as $item)
                <input type="radio" name="{{ $row->name }}" value="{{ $item->value }}" id="pet-filter-{{ $row->name }}-{{ $item->value }}" {{ $item->checked ? 'checked' : '' }}>
                <label for="pet-filter-{{ $row->name }}-{{ $item->value }}">@lang("components.pet_filter_{$row->name}_{$item->value}")</label>
        @endforeach
        </div>
    @endforeach
    <footer class="pet-filter-footer">
        <button class="btn btn-search">@lang('messages.search')</button>
    </footer>
</form>