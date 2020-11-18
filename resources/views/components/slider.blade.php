<div class="slider">
    <h2 class="slider-title">{{$title}}</h2>
    <div class="slider-slides owl-carousel">
        @foreach ($items as $item)
            <div class="slide" style="background-image: url({{$item->image}})">
                <span class="like"></span>
                <div class="slide-info">
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
            </div>
        @endforeach   
    </div>
</div>
