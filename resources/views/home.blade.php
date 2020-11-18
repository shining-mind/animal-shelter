@extends('layouts.app')
@section('content')
    <x-slider :title="trans('messages.home_title')" :items="$slider_items"/>
    <section class="section">
        <div class="text-center">
            <a class="btn btn--find-friend" href="">@lang('messages.find_friend')</a>
        </div>
    </section>
    <section class="section">
        <div class="text-center">
            <a class="btn btn--feeling-lucky" href="">@lang('messages.feeling_lucky')</a>
        </div>
    </section>
@endsection