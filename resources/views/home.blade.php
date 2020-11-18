@extends('layouts.app')
@section('content')
    <x-slider :title="trans('messages.home_title')" :items="$slider_items"/>
@endsection