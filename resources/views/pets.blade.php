@extends('layouts.app')
@section('content')
    <section class="section">
        <h1 class="text-center">{{$title}}</h1>
    </section>
    <section class="section">
        <x-pet-filter />
    </section>
    <section class="section">
        @if ($pets->total() === 0)
            <h2>@lang('messages.pets_title_not_found')</h2>
        @else
            <h2>@lang('messages.pets_title_found')</h2>
            <div class="row">
                @foreach ($pets as $pet)
                    <div class="col-md-3 col-sm-6">
                        <x-pet-card :pet="$pet" />
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection