<div class="slider">
    <h2 class="slider-title">{{$title}}</h2>
    <div class="slider-slides owl-carousel">
        @foreach ($items as $item)
            <a href="{{ $item->url }}" class="slide" style="background-image: url({{$item->image}})">
                <img src="{{$item->image}}" class="card-img" alt="{{$item->title}}">
                <div class="slide-info">
                    <span class="like"></span>
                    <div class="slide-title">{{$item->title}}</div>
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
        @endforeach   
    </div>
</div>
