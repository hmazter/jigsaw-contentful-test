@extends('_layouts.master')

@section('body')
    <img src="{{ $page->heroImage }}">

    <h1>{{ $page->title }}</h1>

    <div class="content">
        @yield('content')
    </div>

    <small>Published at {{ date('Y-m-d H:i:s', $page->publishDate) }} by {{ $page->author }}</small><br>
    <small>Tags: {{ $page->tags }}</small>
@endsection
