@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col">
                <h1>{{$title}}</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, et quam. Temporibus explicabo pariatur eos officiis nobis, rerum in ipsa animi unde? Porro, deleniti et tenetur cupiditate voluptate eum eos?
                </p>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, dolores minus. Voluptatibus, veritatis molestias! Corrupti sit dolor voluptas a, adipisci vero nobis labore in, dolorem expedita reiciendis ullam similique quod!
                </p>
            </div>
        </div>
    </section>
    <section class="section section-no-gutters">
        <x-slider :title="trans('messages.home_slider_title')" :items="$slider_items"/>
    </section>
    <section class="section">
        <div class="text-center">
            <a class="btn btn-find-friend" href="{{ url('/pets') }}"><span class="btn-text">@lang('messages.find_friend')</span></a>
        </div>
    </section>
    <section class="section">
        <div class="text-center">
            <a class="btn btn-primary" href="{{ url('/pets/feeling-lucky') }}" rel="nofollow">@lang('messages.feeling_lucky')</a>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col">
                <x-viewed-pets/>
            </div>
        </div>
    </section>
@endsection