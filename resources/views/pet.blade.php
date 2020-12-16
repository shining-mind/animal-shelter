@extends('layouts.app')
@section('content')
    <section class="pet">
        <h1>{{$title}}</h1>
        <div class="row">
            {{-- Images --}}
            <div class="pet-images col-md-4">
                @if (count($pet->images))
                    <img src="{{ $pet->images[0]->url }}" alt="{{ $pet->name }}" class="pet-image">
                    <div class="pet-previews">
                        @foreach ($pet->images as $key => $image)
                            <a href="{{ $image->url }}" class="pet-preview">
                                <img src="{{ $image->url }}" alt="{{ $pet->name }} {{ $key + 1}}">
                            </a>
                        @endforeach
                    </div>
                @else
                    <img src="{{ asset('/images/no-image.jpg') }}" alt="{{ $pet->name }}" class="pet-image">
                @endif
            </div>
            {{-- Info --}}
            <div class="pet-info col-md-8">
                <dl class="pet-facts">
                    <dt>@lang('messages.pet_age')</dt>
                    <dd>
                        @if ($pet->age < 12)
                            {{ trans_plural('messages.pet_age_months', $pet->age) }}
                        @else
                            {{ trans_plural('messages.pet_age_years', round($pet->age / 12)) }}
                        @endif
                    </dd>
                    <dt>@lang('messages.pet_sex')</dt>
                    <dd>@lang('messages.pet_sex_' . strtolower($pet->sex))</dd>
                </dl>
                @if (count($pet->tags))
                    <div class="pet-tags">
                        @foreach ($pet->tags as $tag)
                            <span class="pet-tag">{{ $tag->text }}</span>
                        @endforeach
                    </div>
                @endif
                @if ($pet->description !== '')
                    <div class="pet-story">
                        {{ $pet->description }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection