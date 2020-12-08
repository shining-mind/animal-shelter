<div class="pet-card {{ $className ?? '' }}">
    <img class="pet-img card-img" src="{{$pet->image}}" alt="{{$pet->title}}">
    <div class="pet-info">
        <div class="pet-title">{{$pet->title}}</div>
        @if (!empty($item->tags))
            <div class="tags">
                @foreach ($item->tags as $tag)
                    <span class="tag">
                        <span class="tag-icon {{$tag->icon}}"></span>
                        <span class="tag-title">{{$tag->title}}</span>
                @endforeach
            </div>
        @endif
    </div>
</div>