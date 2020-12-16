<a href="{{ url("/pets/{$pet->id}")}}" class="pet-card {{ $className ?? '' }}">
    <img class="pet-img" src="{{isset($pet->images[0]) ? $pet->images[0]->url : asset('/images/no-image.jpg')}}" alt="{{$pet->name}}">
    <div class="pet-info">
        <div class="pet-title">{{$pet->name}}</div>
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
</a>